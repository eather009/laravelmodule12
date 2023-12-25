git clone https://github.com/eather009/laravelmodule12.git

### Go to Application folder and Run commands

composer install

## update .env
cp .env.example .env

### Update database settings

php artisan key:generate

mkdir -p storage/framework/cache

mkdir -p storage/framework/sessions

mkdir -p storage/framework/testing

mkdir -p storage/framework/views

chmod -R 775 storage

chmod -R 775 bootstrap/cache

php artisan migrate

php artisan db:seed BusSeeder

php artisan db:seed LocationSeeder

## Run application
npm install

npm run dev 

