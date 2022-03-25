## Laravel

docker-compose up --build -d

docker exec -ti laravel.test composer install

docker exec -ti ifgaccess-laravel_laravel.test_1 composer install

docker exec -ti ifgaccess-laravel_laravel.test_1 php artisan key:generate

docker exec -ti ifgaccess-laravel_laravel.test_1 php artisan migrate

###
Usuário Admin:

email: admin@if.com

senha: 123456 
