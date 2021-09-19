## Laravel Multi-auth using guards.
This web application allows authentication of three users: Regular user, a lecturer and an admin.

This functionality is implemented by making three different guards for specified classes and restricting parts of the application based on these guards.

#### Built with 
- Laravel 8
- Bootstrap 4 ui and auth
- Sass

#### Installation

- Download or clone the repository
- Cd into the project directory
- Install and compile all the frontend dependencies by running the command below:


```npm install && npm run dev ```
- Configure the .env file as done below
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=multi_auth_guards
DB_USERNAME=root
DB_PASSWORD=
```
- Create a local database in xampp or mysql with similar database name as set in .env file
- 
- Run ``` php artisan migrate```

Congratulations the project is now correctly configured!

Fire up the local server to see the project.

 ```php artisan serve```

 ##### Author 
 Hardy Kathurima

 A junior full stack developer :-)