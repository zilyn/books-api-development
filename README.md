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


# Testing The Application(User Testing)



 1.  Note:: ** when creating an author in the application you have to arrange the name of the authors separated with commas

 2.  when testing the external application you can use any of the strings to search for the name of the book

      "name" or "name or name" or name

     To filter the books you need to search with you desired parameters as shown below

http://localhost:8000/api/v1/books?search=A Game of Thrones

http://localhost:8000/api/v1/books?search="A Game of Thrones"

http://localhost:8000/api/v1/books?search=2020



# Test Coverage Report



1.    To view the test coverage
2.    navigate to the coverage folder
3.    click on the index.html open with any browser(100% free from risk)


![Screenshot 2022-09-13 at 10-05-03 Code Coverage for the short coding assignment](https://user-images.githubusercontent.com/63076848/189860804-052ac9b9-5430-450d-a970-64e4c49d1ba5.png)

