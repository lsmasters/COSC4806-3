README for COSC4806 Assignment 3

Assignment 3 Requirements:
•	Use my example to implement MVC (MVC must be used going forward) 

•	Clone this: https://github.com/mikebiox/cosc-4806-3.git and delete the .git folder and initialize in your own repo

•	If you cannot see the .git folder, make sure to enable show hidden files

•	Move your code to appropriate php files (model, controllers, or view file)

•	Should have a login controller and a home controller, a user model, two views, and possibly more!

•	When a user creates an account, it can be either done in a new controller (create) or use the login controller and a new function (create). It's up to you.

•	Create a log table in your database and log all login attempts (good and bad). You'll need to log username, attempt (good, bad), and time:  created file ‘log.log’

•	Also, after 3 unsuccessful login attempts, lock the user out for 60 seconds (based on the time of the last failed attempt) used sleep() to lockout screen for 60 seconds…seems a lot longer but I timed it and it is ok

•	Implement basic CSS. In my example, bootstrap is being used but you can delete that and use whatever you want. It doesn't have to look great, just okay:  created an aboutme html page but couldn’t get it working because it always went to the home page

•	Everything must be in MVC format. You'll only need to modify the controllers, views, and model files/folders. Nothing else. 



Installation Instructions
• start with index.php with valid username/passwords already in the database users:

Username Password

Adam Adam123$

Barbara Barbara123$

Charles Charles123$

Donald Donald123$

Emily Emily123$

Flowchart
image

Known Issues / Limitations: there is a security issue with the disclosure that this user name is not unique. Perhaps I should have used an error message of “Issue with the username and/or password.”

Authors

• Dr. Mike Biocchi with some additions by Larry Masters(student COSC4806)

Contact Information
Email to: lmasters@algomau.ca
