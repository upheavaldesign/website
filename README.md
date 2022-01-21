# UPHEAVALDESIGN #
https://www.upheavaldesign.com

#### Credits
Jeremiah Deasey  
Design, Front End, Programming  
Email: sales@upheavaldesign.com    
Location: Portland, OR, USA   


### Development Setup

For front-end asset management, we are using NPM & Grunt.
Review **package.json** to see which modules we're using for dev.
This requires [node](http://nodejs.org/download/) and npm.

	# install grunt plugins
	npm install
	
	# watch for changes, re-build, and livereload
	grunt

	# build production-ready assets
	grunt build


### CSS

We are using Sass and [Zurb Foundation 6](https://foundation.zurb.com/sites/docs/) as our CSS framework. Upgraded to XY Grid.


### JS

We are using jQuery. All scripts are compiled and minified.


### Images

Images are stored in **src/img**. Graphics and SVGs are stored in **src/gfx**, SVGs are compiled into a sprite.svg  
`grunt build` processes these with optimization and places them into the **assets** directory.


#### Helper Scripts
[LazySizes](https://github.com/aFarkas/lazysizes) 
[Masonry](https://masonry.desandro.com/)