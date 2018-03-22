## A demo for a tourist app that I've worked on.
This is BY NO MEANS a complete project, it is just a demo of an idea that I've worked on with a team of friends.
All the JavaScript code for this project (including the custom made sorting function that compares coordinates using your geolocation) is written by me as I was responsible for the JavaScript part of this project. Everything else(the database, the layout etc) was made by the rest of the team.


## How to initialize this project on your local computer

1. Install XAMPP -> https://www.apachefriends.org/index.html
2. Install Composer -> https://getcomposer.org/
3. Clone this repository on your local machine in htdocs folder that's inside your xampp folder
4. After cloning the repository, open the folder with Visual Code
if you use it, and press CTRL+` to open terminal, and write
"composer update" press enter. If you don't use Visual Code, 
open command prompt, and cd to folder of the project, and 
run "composer update" .
6. After "composer update" you will be able to view the project live
on your machine, so activate XAMPP, Apache and mySQL modules, 
and go to "http://localhost/Tourist-App-Demo-master/public/alpha" in your browser to view it live.
NOTE: The "master" in the above link is the default if you don't change the name of the folder after you pull it from the master branch on GitHub. Please don't change the name of the folder, or if it's not "Tourist-App-Demo-master" make sure you name it that so the API can work properly.

## Database setup.

1. Launch your XAMPP, activate Apache and mySQL modules.
2. Go to localhost/phpmyadmin, create a new database
you can see the option "New" on the left sidebar menu. 
3. Name your new database "random_db" , for collation
choose "utf8_general_ci"
4. Dont do anything else, just go to localhost/phpmyadmin,
click the newly created database, so, "random_db",
and at the top menu bar click "Import"
5. Browse and choose the file random_db from the database folder that is located inside the project folder



**If you are in doubt wether you imported the data correctly or not, visit**
**http://localhost/Tourist-App-Demo-master/public/api/destinations , if you get an empty page or an error message then you didnt import the db correctly**
