composer create-project laravel/laravel jadestudio 
.env adatbazis jadestudio usee: root pass: none 
https://voyager-docs.devdojo.com/bread/introduction
composer require tcg/voyager
php artisan voyager:install
php artisan serve
php artisan voyager:admin motto001@gmail.com --create
you will be prompted for the users name and password.
http://localhost:8000/admin 
email: motto001@gmail.com
password: motto6814
hibajel:GD Library extension not available with this PHP installation.

php.ini: 
#extension=gd backslash eltávolítása
Go to php folder. It is usually present in C:\xampp.
Copy php_gd.dll and paste it into the following folder.
C:\Windows\System32
Restart the XAMPP server helyett restart az artisan serve

php artisan make:migration create_products_table --create=products
php artisan migrate