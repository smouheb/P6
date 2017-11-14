
# SnowTricks

# 1 Context

This is a project using Symfony3,

I have deployed it in production under the following domain:
http://snowtrick.senso.lu/


# 2 Technical Environment

For this Project I have used:

- PHP 7.1

- MySQL server 5.5

- Built in PHP web server (in dev environment, please use another types of web server such as Apache or Nginx in production)


# 3 Installation

Clone this project and install it in the root directory of your project.

The source code can be found in the src folder (and the bundles I've used are all stored in the vendor folder as per Symfony requirements).

By using the command line install all current vendors by using composer.
If you don't have it here is the link:
https://getcomposer.org/download/

use the following command  prompt : composer install

You can either impor the .sql file attached to this project directly into your database,

or

As I am using doctrine as my ORM, so to create the database, please use the below commands:

php bin/console doctrine:database:create
php bin/console doctrine:schema:update --force

And you are good to go


