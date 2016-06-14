# subscription_boxes

README.md


The site’s URL:
http://cs.umw.edu/~chall7/subscription_boxes/#home.php
http://cs.umw.edu/~chall7/subscription_boxes/#new_account.php
http://cs.umw.edu/~chall7/subscription_boxes/index.php#box_signup.phpi
http://cs.umw.edu/~chall7/subscription_boxes/#contact.php
This URL will connect you to the site’s main page, and the URL will change the .php files based on which tab the user has clicked on.  


The information to access the site’s database can be found in the dbinfo.php file within the templates directory. It is as follows:
$dbhost = 'localhost';
$dbuser = 'chall7';
$dbpass = 'password';
$dbname = 'cpsc348_chall7';


To test login and signup information we used these profiles:
John Doe     jdoe@gmail.com     password
Bob Jones    bjones@gmail.com   password
Joe Schmo    jschmo@msn.com     password
John Smith   jsmith@gmail.com   password
First you must create an acounnt with your basic information, such as first & last name, email address, shipping address, and password. Your username will be the same as your email address. Next you may start a new subscription by typing in your username and password, and then selecting the box you would like to receive based on your preference.


Information necessary to the site is based on the University’s Economic Department and how they wish to implement the data. As for now, the only necessary information to access the site is the database login information (located in the dbinfo.php file) which is subject to change. 


This section will explain what has been done to create the site, what has not been finished, and why. This site was created to make subscribing to (care package) boxes for students studying abroad. The goal was to make it easy for students to create an account and select the type of box they wish to receive based on what worked best for them. For every account created there is a database that stores the information they entered to allow making a subscription box as easy as possible on the user and adminstration. The site also uses a template interface that loads page information directly within a section of the screen, depending on which tab has been selected, to take stress off the server to load an entire new page while also providing ease for the user. The styles and code used to create this site are intended to make the subscription process as easy as possible. However, there were some aspects of the site that we were unable to incorporate. Examples include an actual payment option or the ability to customize a box with items that do not appear on the page. As for the payment option, it was difficult to create and test payment transfers, but the option can be added to the New Subscription if need be in the future. The ability to truly customize a box with any items will also eventually be added to the implementation as the site progresses. Part of the issues discussed are because of time and the team's schedules. We apologize for any inconvenience, but the site can only get better from here.
