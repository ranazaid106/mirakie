
# Steps to run the Project

## Terminal/Command prompt
- Open a terminal/command prompt window and navigate to the root directory of the project.

## Composer Install
- Run the [composer install](https://getcomposer.org/download/) command to install all the project dependencies specified in the **composer.json** file.

## Copy .env.example
- Copy the **.env.example** file to a new **.env** file by running the command **cp .env.example .env** on Linux/Mac or **copy .env.example .env** on Windows.

## Application Key
- Generate a new application key by running the command **php artisan key:generate**.

## Database Configuration
- Set up the database configuration in the **.env** file. You will need to provide the database name, username, and password for your local database server.

## Migrations
- Run the migration command **php artisan migrate** to create the required database tables.

## Database Seeding
- Run the command **php artisan db:seed** to populate the database with initial data.

## Admin Credentials
- If you want to login as admin, you can use these default credentials
- **email:** admin@admin.com
- **password:** 1234567890

## Run the server
- Finally, start the development server by running the command **php artisan serve**. The server should now be running at http://localhost:8000, and you can access the application in your web browser.
