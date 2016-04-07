# Strengthpen

Web application for managing and tracking your trainings plans;

## How to set it up
```
git clone https://github.com/tapiwan/strengthpen strengthpen
cd strengthpen
cp .env.example .env
composer install
```

Then you need to enter the .env file and edit your database connection
`nano .env`
Don't forget to save, but nano should remind you to do that.

Then run
```
php artisan key:generate
php artisan migrate --seed
```
This generates a new key for your app in the .env file and it created and fills the database tables

To start the webserver run
`php artisan serve`
