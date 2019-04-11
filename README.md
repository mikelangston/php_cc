# README
### PHP Code Challenge
This code requires PHP version 7.1.23 or higher and PHPUnit 7 for testing.
Also Composer is used to install and manage dependences eg. PHPUnit.
### Running the code
You can run this code in your terminal with Interactive PHP, use the following
command:
```
php -a -d auto_prepend_file=main.php
```
The above assumes you are in the root directory of the application.
From here you can instantiate any of the classes.
### Running the tests
You can run the test suite in your terminal with the following command:
```
./vendor/bin/phpunit --bootstrap vendor/autoload.php tests
```
The above assumes you are in the root directory of the application.