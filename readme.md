# Strengthpen

Web application for managing and tracking your trainings plans;

## How to set it up
```
git clone https://github.com/tapiwan/strengthpen strengthpen
cd strengthpen
cp .env.example .env
composer install
```

Then you need to edit the `.env` file and enter your database connection.
In the terminal you can do this by running:
```
nano .env
```
Don't forget to save, but `nano` should remind you to do that.
You can also use any other editor of course to edit the file.

Then run
```
php artisan key:generate
php artisan migrate --seed
```
This generates a new key for your app in the `.env` file and it creates and fills the database tables

To start the webserver run
```
php artisan serve
```
