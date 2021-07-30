<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## The order of project deployment

- download and install server(php v7.4+, mysql v6+(mariaDB v12+)). You can use [XAMPP](https://www.apachefriends.org/ru/download.html) for quick deployment.
- clone or download repository files.
- created and settings .env files.
- execute commands: npm install and npm run dev.
- execute commands: php artisan permission:create-role admin(user). Тhe user at registration is automatically registered as the user, for this purpose it is necessary to change the rights to the administrator in the database table.

