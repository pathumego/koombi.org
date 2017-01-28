koombi
======

An open source crowdfunding and crowdsourcing platform.

How-to Setup
------------
* Install & configure the WAMPServer/XAMPP/MAMP like any Apache-MySQL-PHP Stack
* Clone the Project from GitHub
* Import MySQL database file from ```DB``` folder to MySQL Server
* Open ```application/config/config.php```
* Change the ```base_url``` & Save.
* Open ```application/config/database.php```
* Change and update new database configs: ```$db['default']['hostname'] = 'localhost';```, ```$db['default']['username'] = 'root';```, ```$db['default']['password'] = '';```, ```$db['default']['database'] = '';``` & Save all.
* Done!
