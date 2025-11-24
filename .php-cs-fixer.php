<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__.'/src')
    ->in(__DIR__.'/tests')
;

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2' => true,
        '@Symfony' => true,
        'ordered_imports' => true,
        'array_syntax' => ['syntax' => 'short'],
        'fully_qualified_strict_types' => false,
        'global_namespace_import' => true,
        'no_superfluous_phpdoc_tags' => false,
        'phpdoc_annotation_without_dot' => false,
        'phpdoc_types_order' => false,
        'phpdoc_separation' => ['skip_unlisted_annotations' => true],
        'phpdoc_summary' => false,
        'phpdoc_to_comment' => false,
        'phpdoc_align' => false,
        'yoda_style' => false,
    ])
    ->setFinder($finder)
;
