# PHP Console Command Template

## Installation & Quick Start

This assumes you have composer installed and on your path. If not: [getcomposer.org](https://getcomposer.org/)

1. `$ git clone git@github.com:tammyd/php-console-command-starter-pack.git [command-repo-name]`
2. `$ cd [command-repo-name]`
3. `$ composer install`
4. `$ ./console.php example "Hello World!"`

## To add a new Command

1. Read up on the [Symfony Console Command Component](http://symfony.com/doc/current/components/console.html)
2. Create any new console commands in the `/src` directory. Use `ExampleCommand.php` as a starting point if needed.
3. Add your new console command to `console.php` in the root directory
4. Run your command `./console.php [command_name]`

## If you want to use environment variables

I've included the [phpdotenv](https://github.com/vlucas/phpdotenv) package by default. It's great for 
 passwords and other things you don't want in source control. Put these in your .env file
 to use. You should also update the .env.dist (which is managed with git) with a dummy value.