build:
	@echo "==================================================="
	@echo "== Building the production version of the plugin =="
	@echo "==================================================="
	mkdir build
	cp -r admin build
	cp -r includes build
	cp -r languages build
	cp -r public build
	cp -r templates build
	cp -r composer.json build
	cp -r index.php build
	cp -r plugin-name.php build
	cp -r README.txt build
	cp -r uninstall.php build
	composer install --no-dev --optimize-autoloader -d build/
	rm -rf build/composer.json

dev:
	@echo "============================================="
	@echo "== Installing all the project dependencies =="
	@echo "============================================="
	composer install

test:
	@echo "========================"
	@echo "== Running unit tests =="
	@echo "========================"
	vendor/bin/phpunit
	@echo "=============================="
	@echo "== Running code style check =="
	@echo "=============================="
	vendor/bin/phpcs
	@echo "============================"
	@echo "== Running static checker =="
	@echo "============================"
	vendor/bin/phpstan analyze -c phpstan.neon