CLASS_FILES = $(shell find vendor/webmozart/assert/src/ -type f -name '*.php')

BUILD_DIR = api/latest

CP ?= cp -f
RM ?= rm -f
APIGEN ?= bin/apigen
APIGEN_GENERATE = $(APIGEN) generate
COMPOSER ?= composer
COMPOSER_UPDATE = $(COMPOSER) update
COMPOSER_INSTALL = $(COMPOSER) install

all: html

html: $(CLASS_FILES) $(APIGEN) update
	$(APIGEN_GENERATE) -d $(BUILD_DIR)

update: FORCE
	$(COMPOSER_UPDATE)

$(APIGEN):
	$(COMPOSER_INSTALL)

clean:
	$(RM) -r $(BUILD_DIR)

.PHONY: FORCE
