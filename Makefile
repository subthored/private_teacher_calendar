start:
	php artisan serve --host 0.0.0.0

install:
	composer install && npm install

database: touch database/database.sqlite

lint:
	composer exec --verbose phpcs

lint-fix:
	composer exec --verbose phpcbf

phpstan:
	vendor/bin/phpstan analyse -c phpstan.neon
