build:
	@echo "Building the production version of the plugin"
  npm run build
  cp -R dist ./build
  cp -R includes ./build
  cp -R vendor ./build
  cp -R freemius ./build
  cp -R rest-routes.php ./build
  cp -R assets ./build
  cp -R images ./build
  cp -R inc ./build
  cp -R readme.txt ./build