



#  RS21 Mac Development Environment Setup
Version 0.1

This document is for RS21 Developers who want to configure a local environment on their laptop for Laravel/PHP Development.

## Overview
We are going to setup a local dockerized environment that allows us to run a variety of repos, with a variety of backend options, with localized DNS masking and comes with a browser based SQL client. 

## Install ->

1. Make sure your Macbook has the latest OS/Security updates. 

2. Intall the **[Imarc Ops](https://github.com/imarc/ops)** tool. Follow the instructions carefully.

3. Create the directory Sites in your Home directory.

4. From terminal run `sudo nano private/etc/hosts` (or Vim if that is your jam).

5. Add the lines:
 `127.0.0.1       mysql`
 `127.0.0.1       mariadb` 

6. If you are reading this you probably already grabbed the repo, but move it to your `$HOME/Sites` directory. **[Repo Here](https://github.com/rs21io/wrats-application)**. 

7. Run `cd $HOME/Sites/wrats-application`

8. Run `php artisan breeze:install`

9. Run `composer install`.

10. Run `npm install`.

11. Run `cp.env_example .env`.

12. Inside of your local MySQL installation (https://adminer.ops.imarc.io/?server=mariadb&username=root&database= ) if you are using the RS21 environment. Create a database called: wrats-application	 using: utf8mb4_general_ci  .

13. Back to your terminal: Run `php artisan migrate`.

14. From here you should be able to open `https://ops.imarc.io/` from your browser. Find the `wrats` project in the upper left and click on it. If you are using Chrome you may have to change the URL to http vs https as it sometimes doesn't like the ssl cert.

15. Open your browser and hit `http://wrats.imarc.io/register`. You should be able to create a new user, login and view your profile.  

Note that the pages are Vue driven, and you the Laravel debug bar down below gives introspection on what is firing in the PHP stack.

###  Normal Maintenance Commands

Sometimes php tools will be added using composer.  When that happens you will want to run  `composer install` to make sure they instantiate in your local environment.  If you run  `composer update` there is a reasonable chance everthing will explode, so don't do that unless you are ready to resolve any version conflicts that happen. 


#### Populating the database with fake data
Most likely we are going to be changing the database schema fairly frequently. 

To update your shcema you will want to follow this process:

## DROP ALL TABLES: 
1. If you have any important data in your database you should back it up.
2. Open up ([https://adminer.ops.imarc.io/?server=mariadb&username=root&database=](https://adminer.ops.imarc.io/?server=mariadb&username=root&db=wrats-application&sql=) )
3. On the left, above the table names you will see 4 icons, mouse over them, and select the "SQL Command" option.
4.  Run this Query:
~~~
SET FOREIGN_KEY_CHECKS = 0;
SELECT concat('DROP TABLE IF EXISTS `', table_name, '`;') AS DropCommands
FROM information_schema.tables
WHERE table_schema = 'wrats-application'
~~~

4. That should give you a bunch of "Drop table" commands. Copy the column  of SQL.
5. At the bottom of the page, you should see another query window. Under the 'Set foreign keys' command paste your SQL. Should look like:
~~~
SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE IF EXISTS `job_batches`;
DROP TABLE IF EXISTS `adjudication_subsections`;
DROP TABLE IF EXISTS `gis_duplicates`;
DROP TABLE IF EXISTS `pod_types`;
~~~
6. But with all of the tables. (backup your data if you need to!) Execute the SQL.

## Building the database from Migrations
1. Because we have the .env and vendor files in gitignore, you may have to move over the .env file, and run composer install if your branch does not have them.
2. Merge main into your current branch. 
3. Open up a terminal and browse to ~/Sites/wrats-application.
4. Check out your branch from git.
5. To build your tables from migrations run `php artisan migrate`.
7. All the tables should rebuild based on the current migration scripts.
8. Head to https://adminer.ops.imarc.io/?server=mariadb&username=root&db=wrats-application to verify that you have tables.

## Seeding your database with data
Note: As of this writing our database has some infinite Foreign key callback relationships that need to be fixed. In those instances I just set the offending foreign key to be a number from 1-9. If you see the data with some weird relationships, that is probably the problem. 
Presuming you have your .env and composer files installed...
1. In your terminal `cd ~/Sites/wrats-application` .
2. Using git, check out your branch.
3. Run this command to seed your database `php artisan db:seed`
4. This should take a minute or two.
5. The seeding function uses the wrats-application/database/seeders/DatabaseSeeder.php file, to execute database/factories files, to generate 9+ entities for each object. Feel free to change behavior to suit your needs.
6. If you want to run a seeder for a specific table the syntax is `php artisan db:seed --class=UserSeeder` , where UserSeeder is a file in the wrats-application/database/seeders directory.
