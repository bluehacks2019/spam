# **Swell**

Swell is a daily self-care app that aims to improve the different categories of wellness holistically through the recommendation of simple tasks.

#### Set-up and Installation Guide

1. Install the latest version of PHP [link](https://secure.php.net/manual/en/install.php)`
2. Install Composer [link](https://getcomposer.org/download/)
3. We used XAMPP for the database server, download here [link](https://www.apachefriends.org/download.html)

After installing the ones above, it's time to run the website!

For first timers,
1. Clone the repo into the htdocs folder in xampp (ex. C://xampp/htdocs/)
2. Create a database with <name> that you want
3. Duplicate .env.example and rename it to .env
4. Edit .env to suit your environment
    * DB_DATABASE (database name)
    * DB_USERNAME
    * DB_PASSWORD
5. Run the following commands
    ```
    composer update
    php artisan key:generate
    php artisan storage:link
    ```

1. Run the following commands
    ```
    php artisan serve
    php artisan migrate
    ```
2. Go to the webstire and register as a user
3. Populate the database with the .sql files inside the _sqlData folder
4. Run the command
    ```
    php artisan db:seed
    ```
    
Made using PHP and Laravel, with 

#### Team
>Team Name: spam
>Members:
>Cher Panlilio
>Leina Santiago
>Deion Menor
>Aaron See