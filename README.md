# UPHEAVAL 2016 #
http://upheavaldesign.com


### Development Setup

For front-end asset management, we are using grunt. 
This requires [node](http://nodejs.org/download/) and npm.

	# install grunt plugins	
	npm install
	npm install grunt-contrib-watch --save-dev
	npm install grunt-contrib-sass --save-dev
	npm install grunt-contrib-imagemin --save-dev
	npm install --save imagemin-mozjpeg
	npm install grunt-contrib-uglify --save-dev
	
	# watch for changes, re-build, and livereload
	grunt
	
	# build production-ready assets
	grunt build
	
	
### CSS

We are using Sass and Zurb Foundation 5 as our CSS framework.


### JS

Compress and compile all JS into a single file.


### Images

Image optimization