# student-management-system
***
## Project Description:
In this php project, i create a student management application that can be used to manage a college or university or just any institution. The application so far has a complete admin section with a student section coming soon. The admin can do a variety of things as he traverses the application. His abilities are:
* View and add units,deartments, schools, students and courses.
* Edit and delete students, courses, units, departments
* He can perform CRUD operations on all the above items

The student section will be implemented later with features such as viewing units and school details...
***
## Project File structure;
* `admin` - This directory contains admin pages and utilities only specific to admin
    * scripts - This sub-directory contains js files for ajax queries usefull in the admin section
        * jqdpt.js - sends request to processdpt.php to be used in the viewdepts.php page
        * managecourse.js - sends request to mcourse.php to be used in the managecourse.php page
        * script.js - sends request to processcourse.php to be used in the viewcousre.php page
        * studentcoursereq.js - sends request to studentcourse.php to be used in the addstudent.php page
        * unitprocess.js - sends request to processunit.php to be used in the addunit.php page
    * others  - The other files in admin are generally the web pages to be opened depending on what is clicked.
* `ajaxfiles` - This file folder contains php files where ajax requests are sent for processing
    * **mcourse.php** - receives requests and sends response to managecourse.js
    * **processcourse.php** - receives requests and sends response to jqdpt.js
    * **processdpt.php** - receives requests and sends response to jqdpt.js
    * **processunit.php** - receives requests and sends response to unitprocess.js
    * **studentcourse.php** - receives requests and sends response to studentcoursereq.js

* `public` - This folder contains shared or common resources between the admin and user
* `test` - This contains css and js file that dictates how all the pages are rendered. They contain the styling and working of the sidebar navigation
***
## Technologies used;
* `PHP` - This was used as the main language for development of this application and it generally dictates the page rendering
* `XAMMP` - This was used as a local server since PHP can't interprated by the normal browser
* `SQL` - SQL was used as a database query language to communicate and retrive infomation from the database
* `phpmyadmin` - This is the application that holds the database used in the project. The database name used for this applications is `sms`.
* `Ajax` - this is a Javascript library that has been used for sending asynchronous requests to php servers and returning the response.
* `Bootstrap` - This was generally used for responsive web development and web page styling. 
* `Javascript` - This was used to make the user side of the application dynamic.
***
## How it works.
The admin has to login to access the dashboard page. To login, username = `alpha`, password = `alpha`
After login, the page directs to dashboard.php where the admin can do a number of series. The sidebar menu can be toggled to have different views. Each item on the sidebar menu redirects to a different page within the application. The courses, units and departments can be viewed per school or as a whole. When viewed per school, the school has to be selected; a request is then sent to the correct backend page in the ajaxfiles directory. A response is then sent back and the appropriate div is populated with the response of the request.

For the add unit page, the admin first selects the school where the unit will belong. Once school is selected, the course select tag is populated with courses related to the selected school. The admin can the go on to enter other information about the unit and submit it. 
Finally, when all is done, the admin can logout from the application.
***
## How to install the application
Before you use the application, it is advisable that you install a local server, preferably XAMMP or WAMMP.
After installing the necessary server, go to admin folder, then tables.sql and run the sql code to get the database and tables ready for use by the application. Next, you can open the code in a browser and see how the application works.

Feel free to make any changes to any part of the application as you wish.
You can clone the repository at https://github.com/ealpha072/student-management-system.git
***
## To do
* Add a user section that can view enrolled courses.
* Implement site security to prevent SQL injections.
* Add more descriptions for files used.
* Sessioning to control page flows.
