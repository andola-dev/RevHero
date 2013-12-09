RevHero
=======

RevHero is a free and open source ad network system based on CakePHP and MySQL, which runs on a web hosting service.

Application Setup
-----------------

Clone the project RevHero *git clone git@github.com:RevHero/RevHero.git*

### Database configuration ###
 - Rename the database setting file from "app/Config/database.php.default" to "app/Config/database.php"
 - Edit the database settings on "app/Config/database.php" for the "$default" variable under the "DATABASE_CONFIG" class
 - Open the terminal and connect to the database. For MySQl database use the command **mysql -u myusername -p**
 - Create a new database in the same name given on the database.php
 - Make sure the user given on the database.php exist and has sufficient priviledge
 
### Setting up database ###
 - Import the database sturecture found on "app/SQL/" folder
 - MySQl command to import the database **mysql -u myuser -p mydbname < absolute_path_to_the_sql_file**
 
### Creating the Admin User ###
 - Navigate to the folder "app/Config/seed_admin.php"
 - Edit the default Admin credentials and databse credentials
 - Run the PHP file in the terminal **php seed_admin.php**

### Bootstrap Configuration ###
 - Edit the bootstrap settings on "app/Config/bootstrap.php" for the "define('SUB_FOLDER', '');"
 - Add the project folder name followed by "/" for the "SUB_FOLDER" 
 
### Setting up the Mandril & IPInfoDB credentials ###
 - Navigate to the "app/Config/core.php" 
 - Add the Mandril credentials to setup the email notification
 - Register in the "http://ipinfodb.com/" to get the API key
 - Add your API key under "IP_TRACK_INFO"
 
Configure Apache server to run the app by editing the virtual host or point apache to run the app on 80 port