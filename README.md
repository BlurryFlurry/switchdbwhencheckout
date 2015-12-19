# README #


### What is this repository for? ###

* This is just a simple git hook.
But this simple git hook can prevents a lot of problems when you are creating / switching git branches while you are dealing with a mysql database.
The idea of this hook is to get the advantage of branches specific mysql databases in development environments.
Worth a try and this can definitely save some of your hair.

### Version ###
* 1.0a

### How do I get set up? ###

* ### Installation ###
* Simply grab the "post-checkout" file and put it inside of your .git/hooks/ folder. You don't have to clone this repository.

* ### Configuration ###
* You must modify inside of these 3 functions before using.

1. get_dbname_to
1. get_dbuser_to
1. get_dbpass_to

*  And you must correct the value of `$confPath` to direct location of your config file.

* ### Dependencies ###
* bash, version 4.3.*+
* mysql (mariadb or percona should work)

* ### How to run tests ###
* Create a test repository. `git init` (or you can just clone this repo)
* Create a new branch `git checkout -b test`
* Create a test file and commit `touch test` `git add -A && git commit -m "init"`
* Create a mysql database and test table `create database ekdev;` `CREATE TABLE test_table (column_test1 INT NOT NULL AUTO_INCREMENT,PRIMARY KEY ( column_test1));` (or you can use phpmyadmin)
and also you can use vagrant and mount the whole repository to something like `/this_repo`(check my vagrant file)
* **Very impotent: mysql user must have the permissions to create new databases**.
* Read my config.php file and understand how it works with prefixes.
* Create a sample configs or settings file and commit. (or you can use my config.php)
* Open the `post-checkout` file in your favorite text editor and fix the value of `$confPath` by correcting the path to config file.
* find the `get_dbname_to`, `get_dbuser_to`, `get_dbpass_to` simple 3 functions and modify and make sure they can read your settings file. (you can enable the debug mode).
You need a tiny little knowladge about bash scripting. learning about `bash awk command` `bash cut command` and `bash grep command` is enough to get this job done. Look at local variables `databasename`, `username`, `password`, (inside of `get_dbname_to`, `get_dbuser_to`, `get_dbpass_to` functions) carefully. I'm sure you will understand what I've done).


### Contribution guidelines ###

* Always review your code and test it. use a test git repository inside of your pc. Feel free to use a vagrant box if you want. (check my sample vagrant file)


### Who do I talk to? ###

* Repo owner or admin
* Other community or team contact