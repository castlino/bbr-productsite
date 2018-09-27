Used Framework:
  Laravel 5.7 as most web app functionalities and utilities are already available.
  Also coding in laravel is very developer friendly and file organization is pretty neat.

Steps To Setup the site
  1. Clone the code to you development environment/webserver 
  
  ```
    $ cd [/application/path]
    $ git clone https://github.com/castlino/brighte-product-site .
  ```
  2. Setup your webserver domain to point to /public folder. 
      ex:
      
        ```
          <VirtualHost *:80>
            ServerName 192.168.88.88
            ServerAlias brighte-product-site.php7.test
            DocumentRoot "/var/www/sites/laravel/brighte/brighte-product-site/public"

            <Directory "/var/www/sites/laravel/brighte/brighte-product-site/public">
              AllowOverride All
              Options -Indexes +FollowSymLinks
              Require all granted
            </Directory>
            <FilesMatch \.php$>
              SetHandler "proxy:fcgi://127.0.0.1:9000"
            </FilesMatch>
          </VirtualHost>
        ```

  3. Create/Setup your MySQL database, details here will need to be used in step 6 below.
  4. Run composer command below to install dependencies
  
  ```
    $ composer install
  ```
  
  5. copy .env.example to .env and edit below lines
  
    ```
      APP_NAME="[Site name]"
      ..... .. .
      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=3306
      DB_DATABASE=[database_name]
      DB_USERNAME==[database_username]
      DB_PASSWORD==[database_user_password]
    ```
    
  6. Run command below to generate app key.
  
  ```
    $ php artisan key:generate
  ```
  
  7. Run command below to link storage folder to publicly accessible symlink.
  
  ```
    $ php artisan storage:link
  ```
  
  8. Run migration with seeding to create database tables and populate
  
  ```
    $ php artisan migrate:refresh --seed
  ```
  
  9. Restart web Server
    ex: 
    
  ```
    $ sudo service apache2 restart
  ```
  
  10. then visit url...


To Run Unit tests just run the below command.
    $ vendor/bin/phpunit
    
NOTE: 
  To test pagination just run database migrate with seeding as when running unit test/phpunit above, it currently clears the database, so if you need to quickly populate the database with data just run migration refresh with seeder command below to refresh the database and populate:
  
  ```
    $ php artisan migrate:refresh --seed
  ```
  
Time Taken to finish the app:
 6-7 Hours
 
Compromises
  1. Didn't implement too much test just the simple ones to save time.
  2. Should have deleted any images in edited products from local storage when image is replaced.
  3. Didn't implement user authentication.
  4. Included some images into repository to be used for testing/seeding.
