# City of San Diego Web Pattern Library

![](https://github.com/cityofsandiego/pattern_library/blob/master/assets/src/img/logo-mark.png?raw=true)

## Pre-requisites

* Node.js (https://nodejs.org/)
* npm (https://www.npmjs.com/)
* git (https://git-scm.com/downloads)
* LAMP stack

## Mac Setup

The following steps are required to setup a local development environment::

    $ git clone https://github.com/cityofsandiego/pattern_library.git
    $ cd pattern_library
    $ npm install
    $ grunt build

Use the following command to run the project locally::

    $ php -S localhost:8000

## Windows Setup

	$ npm install npm@latest
	$ npm install
	$ npm install -g grunt-cli
	$ npm install -g bower
	$ bower update
	$ npm cache clean
	$ npm install -g grunt-contrib-imagemin@latest
	$ grunt build