# Project Setup(Locally)


 1.   clone the repository
 2.   'git clone https://github.com/zilyn/books-api-development.git'
 3.   cd into the project directory
 4.   'cd books-api'
 5.   install the dependencies for the application
 6.   'composer install'
 7.   create a .env file from the .env.example
 8.   'cp .env.example .env'
 9.   Generate an application key
 10.   'php artisan key:generate'
 11.   create a database called 'booksapi' in your database
 12.   update the env files with your mysql connection details that you have on your system
 
        'DB_CONNECTION=mysql  
         DB_HOST=YOUR_HOST  
         DB_PORT=MYSQL_PORT  
         DB_DATABASE=booksapi  
         DB_USERNAME=MYSQL_USER_NAME  
         DB_PASSWORD=MYSQL_PASSWORD'
         
         
 13.    Running migration data into the database
 14.    'php artisan migrate'
 15.    serving the project
 16.    'php artisan serve'


# Testing The Application

