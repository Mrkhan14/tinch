## Installation

##### Xampp

    Make sure to have the Xampp installed & running in your computer. PHP Version 8.1 or Higher must be required for Laravel 10.

##### Composer

    Make sure to have the Composer installed & running in your computer. make sure the composer version must be 2.2.0 or Higher.

##### Nodejs

    Make sure to have Node.js installed & running on your computer. If you already have installed Node on your computer, you can skip this step if your existing node version is greater than 18.

##### Git

    Make sure to have Git installed globally & running on your computer. If you already have installed git on your computer, you can skip this step.

##### This would install all the required dependencies in the node_modules folder

    npm install

##### command to install all of the framework's dependencies

    composer install

##### Please run the below command to generate the new key

    php artisan key:generate

##### Please fill your DB credentials in the .env file

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=velzon_laravel
    DB_USERNAME=root
    DB_PASSWORD=

##### To compile all scss to css and copy all files from resource to public directory

    npm run build

##### To Generate RTL css files from LTR css

    npm run build-rtl

##### Please run the following commands to clear all cache from the project

    php artisan optimize:clear

##### The development server is accessible at <http://localhost:8000> To run on other port just run command : php artisan serve --port=8001

    php artisan serve

[My Site](http://tinchb2b.uz/)
