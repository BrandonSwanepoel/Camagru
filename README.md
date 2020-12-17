# Camagru
Camagru is a website similar to Instagram. This website is used to upload pictures and share them with everybody using the website.
# Requirements
* HTML
* CSS
* PHP
* JavaScript
* MAMP
* MySQL

# Application setup steps:
1.Install the Bitnami MAMP/LAMP/WAMP stack.\
\
2.Clear your htdocs folder.\
\
3.Clone your repository in htdocs.\
\
4.Configure your MySQL database to use the following credentials initially
#### User:root Password:Brandon!123

##### Remember to change these credentials to make the database more secure

5.To create your database and table run http://localhost/Camagru/config/setup.php in your browsers search bar.\
\
6.Run http://localhost/Camagru in your browsers search bar to start using the site.\
\
7.Register a new user and verify your registration via email.\
\
8.Login and enjoy the website.
# Architecture
1.background, Contains the background image.\
\
2.config, contains all the setup files to start using the website and also the database info.\
\
3.functions, contains all the different functions that are used right through the website.\
\
4.images, contains all the stickers that can be added to a picture.\
\
5.includes, contains the javascript file to take a picture with a webcam and also to add stickers to that picture. It also contains a connection file that is used to connect to the database.\
\
6.users, contains all the functions that has something to do with the user.

# Testing
These are the test that I executed with their expected outcomes:
##### 1.Test
Start web server
##### Expected outcome
Web server start and you can locate website at http://localhost/Camagru
##### 2.Test
Create database with http://localhost/Camagru/config/setup.php
##### Expected outcome
Check http://localhost/phpmyadmin to see if a database called camagru is created with a comments table, images table, likes table and an users table
##### 3.Test
Create an account
##### Expected outcome
You are able to register a new user
##### 4.Test
Log in
##### Expected outcome
You are able to log in with your new account
##### 5.Test
Capture a picture with your webcam
##### Expected outcome
You are able to capture a picture with your webcam
##### 6.Test
Upload a picture
##### Expected outcome
You are able to upload a picture
##### 7.Test
Visit gallery
##### Expected outcome
You are able to see the picture you just uploaded
##### 8.Test
Change your users credentials
##### Expected outcome
You are able to change your credentials
