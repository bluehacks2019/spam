# bh19
blue hacks 2019


Dupicate .env.example and rename it to .env
Edit settings to fit your system
- database name
- database username and password

Run the command "composer update"
Run the command "php artisan key:generate"
Run the command "php artisan storage:link"

Create a database with the name you put in the .env file

Run the command "php artisan serve"

Run the command "php artisan migrate:refresh"
Register as a user
Populate the database using the files inside the _sqlData folder
Run the command "php artisan db:seed"