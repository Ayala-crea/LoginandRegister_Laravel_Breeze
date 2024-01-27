<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## HOW TO BUILD LOGIN REGISTER AND LOGOUT

FOLLOW THIS DOKUMENTER:
PS C:\xampp\htdocs\Kingtarr> composer require laravel/breeze --dev
Cannot use laravel/breeze's latest version v1.28.1 as it requires php ^8.1.0 which is not satisfied by your platform.
./composer.json has been updated
Running composer update laravel/breeze
Loading composer repositories with package information
Updating dependencies
Lock file operations: 1 install, 0 updates, 0 removals
  - Locking laravel/breeze (v1.19.2)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 1 install, 0 updates, 0 removals
  - Installing laravel/breeze (v1.19.2): Extracting archive
Generating optimized autoload files
> Illuminate\Foundation\ComposerScripts::postAutoloadDump
> @php artisan package:discover --ansi

   INFO  Discovering packages.

  laravel/breeze ....................................................................................................................... DONE  
  laravel/sail ......................................................................................................................... DONE  
  laravel/sanctum ...................................................................................................................... DONE  
  laravel/tinker ....................................................................................................................... DONE  
  nesbot/carbon ........................................................................................................................ DONE  
  nunomaduro/collision ................................................................................................................. DONE  
  nunomaduro/termwind .................................................................................................................. DONE  

85 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
> @php artisan vendor:publish --tag=laravel-assets --ansi --force

   INFO  No publishable resources for tag [laravel-assets].

No security vulnerability advisories found.
Using version ^1.19 for laravel/breeze
PS C:\xampp\htdocs\Kingtarr> php artisan breeze:install

  Which stack would you like to install?
  blade ................................................................................................................................... 0  
  react ................................................................................................................................... 1  
  vue ..................................................................................................................................... 2  
  api ..................................................................................................................................... 3  
❯ 0

  Would you like to install dark mode support? (yes/no) [no]
❯ no

  Would you prefer Pest tests instead of PHPUnit? (yes/no) [no]
❯ no

   INFO  Installing and building Node dependencies.  

    
added 142 packages, and audited 143 packages in 31s

34 packages are looking for funding
  run `npm fund` for details

found 0 vulnerabilities
    
> build
> vite build

    vite v4.5.2 building for production...
transforming...
rendering chunks...
    computing gzip size...
public/build/manifest.json              0.26 kB │ gzip:  0.13 kB
public/build/assets/app-45ff1eaa.css   27.08 kB │ gzip:  5.35 kB
public/build/assets/app-f651126f.js   146.12 kB │ gzip: 53.84 kB
✓ built in 5.65s


PS C:\xampp\htdocs\Kingtarr> npm install

up to date, audited 143 packages in 3s

34 packages are looking for funding
  run `npm fund` for details

found 0 vulnerabilities
PS C:\xampp\htdocs\Kingtarr> npm run build
> build
> vite build

vite v4.5.2 building for production...
✓ 51 modules transformed.
public/build/manifest.json              0.26 kB │ gzip:  0.13 kB
public/build/assets/app-45ff1eaa.css   27.08 kB │ gzip:  5.35 kB
public/build/assets/app-f651126f.js   146.12 kB │ gzip: 53.84 kB
✓ built in 4.05s
PS C:\xampp\htdocs\Kingtarr> php artisan migrate

   INFO  Preparing database.
  Creating migration table ....................................................................................................... 143ms DONE  

   INFO  Running migrations.
  2014_10_12_000000_create_users_table ........................................................................................... 519ms DONE  
  2014_10_12_100000_create_password_resets_table ................................................................................. 408ms DONE  
  2019_08_19_000000_create_failed_jobs_table ..................................................................................... 305ms DONE  
  2019_12_14_000001_create_personal_access_tokens_table .......................................................................... 138ms DONE  

PS C:\xampp\htdocs\Kingtarr> php artisan make:controller HomeController

   INFO  Controller [C:\xampp\htdocs\Kingtarr\app/Http/Controllers/HomeController.php] created successfully.

PS C:\xampp\htdocs\Kingtarr> php artisan make:middleware Admin

   INFO  Middleware [C:\xampp\htdocs\Kingtarr\app/Http/Middleware/Admin.php] created successfully.

PS C:\xampp\htdocs\Kingtarr> 