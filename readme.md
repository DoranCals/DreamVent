Need To Fix/To Be Done:

Registering User and logging in DID work

Logout link did not work

Logging back in did not work 

Note: 

If you get infinite redirect on a webpage reset your browser cookies past hour

Requirements:

1. composer

2. laravel

3. mysql server

4. php 7~

5. apache2

Installation for EC2 Server:

***** Make sure to import Version-X.XX sql data from google drive SQL/IMPORT/Version-X.XX to your local sql database using mysql testbench or something ****

1) cd /var/www/
  
  sudo mkdir Version-X.XX
  
  sudo chmod -R 777 Version-X.XX

2) cd Version-X.XX

  - you might have to add the server key to your github account. If so skip to 3)
  
  - cat ~/.ssh/id_rsa.pub    - copy this to your github account. I am not entirely sure. But this is how I cloned the git to the server
  - 
3) git clone https://yourusername@github.com/TheBoop/DreamVent

4) change your apache config files /etc/apache2/sites-available/000-default.conf  

  - change your document root to /var/www/Version-X.XX/DreamVent/public

  - depends on what command does the work. In this case apachectl

3) sudo apachectl restart or whatever you are using

4) cd /var/www/Version-X.XX/DreamVent/         

5) sudo chmod -R 777 storage && sudo chmod -R 777 bootstrap/cache

6) sudo composer install

7) change env to .env and then cd to public/htaccess and rename htaccess to .htaccess

  - env is your enviroment variable
  
  - htaccess routes the web server to the controllers how neat
  
8)  cd /var/www/Version-X.XX/DreamVent/  
    
    php artisan key:generate

9) check the site
