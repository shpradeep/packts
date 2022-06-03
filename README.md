# packts
Assignments Purpose

# Install and Setup Laravel 9
composer create-project laravel/laravel laravel_packts

# Create database name laravel_packts and add config into .env file

DB_CONNECTION=mysql<br /> 
DB_HOST=127.0.0.1<br /> 
DB_PORT=3306<br /> 
DB_DATABASE=laravel_packts<br /> 
DB_USERNAME=YOUR USERNAME<br /> 
DB_PASSWORD=YOUR PASSWORD<br /> 

# Run Migration

php artisan migrate

# Open Project and localhost environment

localhost/laravel_packts

# Project Description:

1 . Command line script is created to get the Products info from the API provided by PACKTS.
2 . Run Commans to get the products into DB table (Table: product)
3 . Create Account onto website
4 . Login with email & password
5 . Checkout the Products List.

