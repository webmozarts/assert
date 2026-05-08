<?php

declare(strict_types=1);

namespace Webmozart\Assert\Bin;

use RuntimeException;

final class StaticAnalysisNonReturnGenerator
{
    private const SOURCE_NAMESPACE = 'namespace Webmozart\\Assert\\Tests\\StaticAnalysis;';
    private const TARGET_NAMESPACE = 'namespace Webmozart\\Assert\\Tests\\StaticAnalysis\\NonReturn;';

    public function __construct(
        private string $staticAnalysisDirectory
    ) {
    }

    public function generate(): void
    {
        $targetDirectory = $this->targetDirectory();

        if (!is_dir($targetDirectory) && !mkdir($targetDirectory, 0777, true) && !is_dir($targetDirectory)) {
            throw new RuntimeException(sprintf('Could not create "%s".', $targetDirectory));
        }

        foreach ($this->generatedFiles() as $targetFile => $content) {
            if (false === file_put_contents($targetFile, $content)) {
                throw new RuntimeException(sprintf('Could not write "%s".', $targetFile));
            }
        }
    }

    /**
     * @return array<string, string>
     */
    public function generatedFiles(): array
    {
        $generatedFiles = [];

        foreach ($this->sourceFiles() as $sourceFile) {
            $content = file_get_contents($sourceFile);
            if (false === $content) {
                throw new RuntimeException(sprintf('Could not read "%s".', $sourceFile));
            }

            $generatedFiles[$this->targetDirectory().'/'.basename($sourceFile)] = $this->generateFileContent($content, $sourceFile);
        }

        return $generatedFiles;
    }

    public function generateFileContent(string $content, string $sourceFile): string
    {
        $content = str_replace(self::SOURCE_NAMESPACE, self::TARGET_NAMESPACE, $content);

        $replacementCount = 0;
        $generatedContent = preg_replace_callback(
            '/^(\s*)return Assert::([A-Za-z0-9_]+)\((\$[A-Za-z_][A-Za-z0-9_]*)([^;\n]*)\);$/m',
            static function (array $matches): string {
                return sprintf(
                    "%sAssert::%s(%s%s);\n\n%sreturn %s;",
                    $matches[1],
                    $matches[2],
                    $matches[3],
                    $matches[4],
                    $matches[1],
                    $matches[3]
                );
            },
            $content,
            -1,
            $replacementCount
        );

        if (null === $generatedContent) {
            throw new RuntimeException(sprintf('Could not generate non-return static analysis test from "%s".', $sourceFile));
        }

        $generatedContent = preg_replace("/;\n{3,}([ \t]+return )/", ";\n\n$1", $generatedContent);
        if (null === $generatedContent) {
            throw new RuntimeException(sprintf('Could not normalize non-return static analysis test from "%s".', $sourceFile));
        }

        $expectedReplacementCount = substr_count($content, 'return Assert::');
        if ($replacementCount !== $expectedReplacementCount) {
            throw new RuntimeException(sprintf(
                'Expected to replace %d return assertions in "%s", replaced %d.',
                $expectedReplacementCount,
                $sourceFile,
                (int) $replacementCount
            ));
        }

        return $generatedContent;
    }

    /**
     * @return list<string>
     */
    private function sourceFiles(): array
    {
        $files = glob($this->staticAnalysisDirectory.'/assert-*.php');
        if (false === $files) {
            throw new RuntimeException(sprintf('Could not scan "%s".', $this->staticAnalysisDirectory));
        }

        sort($files);

        return $files;
    }

    private function targetDirectory(): string
    {
        return $this->staticAnalysisDirectory.'/non-return';
    }
}
