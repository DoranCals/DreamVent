VERSION 1.01

Need To Fix/To Be Done:

- Please make sure you understand routing, controllers, views, and models.

- Start adding some functionality since login and registration is working
    - If you must, you may use rawsql to get some functionality in. 

- Need to add model for USER_LIST_CONTAINS - that raw sql code in AuthController is temporary needs to be transferred to a model. 


Important Info

Models manage data and such.... (Backend)

Views are what the viewer sees... (Frontend)

Controllers is what connects everything through inputs and outputs

Me and Matt worked our butts off debugging the authentication system and understanding how these three things work together.  There are some files in this repository that show you how some of this is accomplished. 


Models are in /app. 

User.php - Completed for auth() functions. auth() = just routing commands for the authentication function

AccountFrontPage.php - Me trying to pull info from the database with app/Repositories/AccountRepository.php. It is unfinished


Controller are in app/http/controller

auth/AuthController.php - Handles registeration and validation form

auth/FrontPageController.php - still playing around with this to output something from the database. Unfinished


Routes are in /app/http/routes.php

We choose what each domain does here with Controllers. 

Example:

  get('/', ~) - if user goes to www.dreamvent.com/ we show them the welcome page

   get(/frontpages', ~) if user is redirected to .com/frontpages controller will check if authenticated if so show frontpagse.index
   

Views are in /DreamVent/resources/views

these are what the user sees

