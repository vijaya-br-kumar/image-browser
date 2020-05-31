Requirements
============
1) PHP >= 7.2
2) MySQL >=5.7
3) Composer
4) Apache2

Follow the below steps to run.
==============================
1) Download the project or clone (C:/xampp/htdocs/ => In Windows) or (/var/www/html/ => In Linux)
2) Run 'composer install' inside the project folder
3) Create new table in MySQL and update the username, password, and DB name in '.env' file
3) Run the migration command 'bin/console doctrine:migrations:migrate' to create the schema
4) URL
    a) http://localhost/<project-folder>/public/index.php/      ===> frontend home page
    b) http://localhost/<project-folder>/public/index.php/login ===> Admin Login page
    b) http://localhost/<project-folder>/public/index.php/register ===> Admin Register page
