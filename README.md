<h1 align="center">Project Management WebApp</h1>

## Objective and Description 
Project Management WebApp is application where authenticated user can manage users, projects and tasks. Here user can addnewuser, addnewtask, update the status of the task , delete task and also view all tasks. User can see numberof active tasks and total number of tasks. Technologies used in this application are as follows:

- Html & CSS
- Bootstrap
- Laravel Framework
- MySql Database

This application used Laravel auth to Register and authenticate users. No unauthorized user can perform operations. Only logged in user can perform operations. Features of this application are as follows:

- Login
- Register New User
- View Current Tasks
    - Count and show Total tasks on Dashboard
    - Count and show Active tasks on Dashboard
- Add New Task
- Update Task
- Delete Task
- Logout

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

After successfull setup user redirect to Project Management App Home and Login with entering Email:: myumba06@gmail.com  and  Password :: myumba06 . After Login user can register new user by clicking on add new user button. By clicking register user form will be open and after filling this user can be register. Also user can add new task by clicking add new task. Then User click on manage task button and all tasks shown in table and here user and update or delete any task. From the top right menu click on its profile and can logout after done. All the screenshots are upload in User Guide.
