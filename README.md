<h1 align="center">Project Management WebApp</h1>

## Description 
Project Management WebApp is application where only authenticated user can mange tasks. Also Improve the design of the application. It validated the user while performing the different operations. It uses checks while adding , updating or deleting the tasks and users. New advanced features added are as follows:

- Laravel Authentication 
- Laravel Validations 
- Improve the Design - Change the whole Design of Application
 
When User perform any task application help user in improving and correcting the inputs by Laravel validations. These validations are as follows:
- No empty input
- Task title has minimum and maximum length of characters
- Task description has minimum and maximum length of characters
- User has password validatioins
- User has to confirm password while creating new user
- etc

## Project Installation

To run this project first of all you need: 
- Editor (VS Code, Dreamweaver etc)
- Web browser (Chrome, Firefox, Edge etc)
- XAMPP server
- Then you have to download composer to install Laravel. After the Composer is installed, check the installation by typing the composer command in the command prompt. Create a new directory anywhere in your system and paste your project files and then run following command in command line: 
-          php artisan serve
- After running this command you get this link : 
-          http://127.0.0.1:8000
- Paste it in your browser and press Enter your project is Installed and show home page now click on "Login" button and login with authorized email and password. Then manage you projects.

## Project Usage

After running this link in browser user found following page :

![Home Page](/public/home.png)

After clicking on login button user found login page :

![Login Page](/public/login.png)

After login user redirects to this page :

![Dashboard](/public/dashboard.png)

Here by clicking on add new user button user redirects to register new user page :

![Register](/public/addnewuser.png)

Here by clicking on add new task button user redirects to add new task page :

![Add New Task](/public/addnewtask.png)

Here by clicking on manage tasks button user redirects to all tasks page :

![Manage Tasks](/public/managetasks.png)

Here by clicking on edit button user redirects to update tasks page :

![Update Tasks](/public/update.png)

Here by clicking on delete button task will be deleted after confirmation from user :

![Delete Tasks](/public/delete.png)

After clicking on Logout User will logout session

![Logout](/public/logout.png)

## Project Testing

<p>After successfull setup the next step is Project Testing here I have done the testing with the manual test you have to run the project and test it as in the user guide. After the setup user redirect to Project Management App Home and Login with entering Email:: myumba06@gmail.com  and  Password :: myumba06 . After Login user can register new user by clicking on add new user button. By clicking register user form will be open and after filling this user can be register. Also user can add new task by clicking add new task. Then User click on manage task button and all tasks shown in table and here user and update or delete any task. From the top right menu click on its profile and can logout after done. All the screenshots are upload in User Guide.</p>

## Reflective analysis

<p>Validation is the most important feature of web application. It validates the incoming data. By default, controller class uses a Validate Requests which provides a convenient method to validate incoming HTTP requests with a variety of powerful validation rules. </p> 

<p>I have done the validation by using Laravel validation because it has strong rules defined for validation. Laravel validation can be performed in several different ways and the error messages are generated either automatically or manually, depending on the validate method of your choice. Once the input is validated, the rest goes as expected, automatically. This way you avoid further errors along the way.</p>

<p>I have done the Validations by using Laravel Validation in 4 steps. </p> 
- Writing The Validation Logic
<p>With everything in place, you can now write the validation logic in the controler store method any method to store data. For this, you can apply the validate method found in the Illuminate\Http\Request object, one of the Laravel validation array of objects. On validation failure, the framework generates an automatic response for the user and you’ll see an Illuminate\Validation\ValidationException. If all is good, the execution continues normally.</p> 
- Displaying Validation Errors
<p>You have defined the validation rules in Laravel and the user input you receive does not comply. What Laravel validation does is take the user back to the previous page and it does that automatically and Display the error message.</p> 
- Form Request Validation In Laravel
<p>Form Request validation is used for validation scenarios of increased complexity. These form request classes are custom classes with validation and authorization logic of their own. To create the request class, run the PHP Artisan make:request command. .</p> 
- Error Messages
<p>Laravel provides a variety of methods to work with error messages. They are available in the Illuminate\Support\MessageBag instance, which you get in a validator instance when you call the errors method.

You can retrieve the first or all messages for a field (the first method or the get method). In the latter case, you may use the * character to retrieve all messages for each form field array.

With the all method you can retrieve, as you may expect, all the messages in all the fields. If you want to check if there is any error for a specific field, use the has method.

</p> 
-Custom Message
<p>By using this validation we have an option to show the custom Error message by writing custom message.</p>

## Refereces
<i>code(Article): Teodora Corbu  
(Individual), Laravel Validation - The Step-by-Step Guide, Code version, and Availability (digitalya.co, [URL](https://digitalya.co/blog/laravel-validation/))</i>


<p align="center">-----------------------------------------</p>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
>>>>>>> 33395dd (test)
