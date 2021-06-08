install-root-dependencies:
	composer update

install-coding-standard-dependencies:
	cd tools/php-cs-fixer && composer update --ignore-platform-req php

coding-standard-fix:
	php tools/php-cs-fixer/vendor/bin/php-cs-fixer fix --config=tools/php-cs-fixer/.php_cs.dist.php

coding-standard-check:
	php tools/php-cs-fixer/vendor/bin/php-cs-fixer fix --config=tools/php-cs-fixer/.php_cs.dist.php --dry-run

static-analysis:
	php tools/psalm/vendor/bin/psalm -c tools/psalm/psalm.xml --show-info=true --no-cache

install-static-analysis-dependencies:
	cd tools/psalm && composer update