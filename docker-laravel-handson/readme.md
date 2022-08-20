docker compose exec app bash

chmod -R 777 storage bootstrap/cache

composer install

php artisan storage:link

php artisan migrate