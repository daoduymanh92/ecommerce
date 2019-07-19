Clone

cp .env.exaple .env

composer install

php artisan key:generate


php artisan serve


//create model and migration


1. tao Product table: 
	php artisan make:model Product -m

	id
	category_id
	name
	slug
	description
	quanity
	status
	order
	created_at
	updated_at
2 . Categories, comments, reviews

php artisan migrate


sua loi khi chay /app/Providers/AppServiceProvider.php 
Schema::defaultStringLength(191);
