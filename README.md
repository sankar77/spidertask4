spider task4

OVERVIEW

Authorization and Authentication(including Access levels). 

LANGUAGE USED:PHP

SERVER USED:APACHE(WAMP SERVER VERSION 2.5)

ROUTES:

1.Inseting data of users with their access levels.(DEFAULT:VIEWER for newly registered user).

2.LOGIN using the credentials(USERNAME AND PASSWORD).You will be lead to different pages according to your access level.

3.If you are a viewer you can see the posts.If you are an editor you can edit the posts.If you are an admin you can delete the posts.

4.If you are an admin you will have a button at the top of the screen(GO TO ADMIN PANEL) which is restricted to users of other 
access levels.

5.In the ADMIN PANEL you will see the list of users who have registered and you can also edit their their access levels.(EXCEPT OTHER 
ADMINS).

DATABASES:spidey

TABLES:

1.taskspider(TO STORE THE USERS' DETAILS).

2.taskspidey(TO STORE THE DESCRIPTION IN THE POST).

FIELDS IN THE TABLE:

taskspider

1.USERNAME

2.PASSWORD

3.STATUS

4.EMAIL

5.MOBILE NO

taskspidey

1.ID

2.DESCRIPTION

BUILD INSTRUCTIONS:

1.Git clone this repository https://github.com/sankar77/spidertask4 into your system.

2.Install wamp server into your system.

3.Push these files to a new folder in www folder of wamp folder located in C:/.

4.Go to localhost and you will find the folder in 'YOUR PROJECTS'.

5.Execute the file through the server.

NOTE:The wamp server can be downloaded from this link:

http://wampserver.com/en/

Create a user with the status as admin.

