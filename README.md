# student-management-system

## Project Description
In this php project, i create a student management application that can be used to manage a college or university or just any institution. The application so far has a complete admin section with a student section coming soon. The admin can do a variety of things as he traverses the application. His abilities are:
* View and add units,deartments, schools, students and courses
* Edit and delete students, courses, units, departments
* He can perform CRUD operations on all the above items

## File structure
* admin - This directory contains admin pages and utilities only specific to admin
    * scripts - This sub-directory contains js files for ajax queries usefull in the admin section
    * others  - The other files in admin are generally the web pages to be opened depending on what is clicked.
* ajaxfiles - This file folder contains php files where ajax requests are sent for processing
* public - This folder contains shared or common resources between the admin and user
* test - This contains css and js file that dictates how all the pages are rendered. They contain the styling and working of the sidebar navigation

## Technologies used
* php - This was used as the main language for development of this application and it generally dictates the page rendering
* XAMMP - This was used as a local server since PHP can't interprated by the normal browser
* SQL - SQL was used as a database query language to communicate and retrive infomation from the database
* phpmyadmin - This is the application that holds the database used in the project. The database name used for this applications is sms.
* Ajax - this is a Javascript library that has been used for sending asynchronous requests to php servers and returning the response.
* Bootstrap - This was generally used for responsive web development and web page styling. 
* Javascript - This was used to make the user side of the application dynamic

## Admin capabilities

## To do
* Add a user section that can view enrolled courses
* Implement site security to prevent SQL injections
