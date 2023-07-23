# Laravel Role Permission Management 

Admin :

Username - amin@shokri.com
password - 123456

Every user must be included in the desired group after being created by the admin.


```
Docker :

```console
docker-compose up -d
```

if needed :
```console
docker-compose exec app php artisan key:generate
```

URL : http://localhost:80


```
No Docker :

Install Laravel Dependencies -
```console
composer install
```

Edit `.env` 

Generate Artisan Key (If needed) -
```console
php artisan key:generate
```

Migrate Database with seeder -
```console
php artisan migrate --seed
```

php artisan db:seed --class=PermissionTableSeeder
php artisan db:seed --class=CreateAdminUserSeeder
php artisan db:seed --class=RoleHasPermissions

Run Project -
```php
php artisan serve
```