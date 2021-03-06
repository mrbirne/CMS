[![Build Status](https://travis-ci.org/mrbirne/CMS.svg?branch=master)](https://travis-ci.org/mrbirne/CMS)
[![Coverage Status](https://coveralls.io/repos/mrbirne/CMS/badge.png?branch=master)](https://coveralls.io/r/mrbirne/CMS?branch=master)
# Collect My Society
Awesome Content-Management made easy - für Vereine!

[![Yii-Logo](http://static.yiiframework.com/css/img/logo.png)](http://www.yiiframework.com/)
[![Bootstrap-Logo](http://www.omarketingo.com/img/logos/bootstrap.png)](http://getbootstrap.com/)

## Installation instructions

### Webserver
- clone this repository into the root directory of your webserver
- create the folder "assets" in that directory
- enter the folder "protected" and create the folder "runtime" 
- for this folders you have to set read and write access for the webserver

### MySql
- create the DB "cms2". We recommend to use the "utf8_general_ci" as default charset 
- for this new DB you have to create an user "cms" with the password "BCv4r2hrfhw4ahrc". If you wish to change this password you have to open protected/config/main.php and search for the line 'db' => array( 'password' => 'BCv4r2hrfhw4ahrc' )
- execute the scripts "DB.sql", "sql/rights/create.sql" and "sql/language/language.sql"

## Usage

### User rights
You may set the folowing rights in order to obtain full permissions:
- MSITE for editing Sites
- MMENU for editing Menu
- MNEWS for editing news
- MGALLERY for editing gallery

in order to grant this rights to your user-account (this is how it works at the moment) you have to visit folowing link on your server "\<url to your website\>/\<right\>/Assign?user=\<your user\>&role=\<role from above\>"
