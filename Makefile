install:
	composer install --prefer-dist

test: install
	composer exec phpunit -- --color tests

lint:
	composer exec 'phpcs --standard=PSR2 src tests'
