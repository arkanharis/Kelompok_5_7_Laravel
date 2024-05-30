
# Employee-Leave-Management-System
A leave Management System created with laravel framework using php and blade templating.
=======
# Kelompok_5_7_Laravel

# Final Project
This repository contains a project implemented using the Laravel framework. Original project sourced from PHPGurukul.

Original project link: [Employee Leaves Management System (ELMS)] https://phpgurukul.com/employee-leaves-management-system-elms/

## Getting Started
### Prerequisites
- XAMPP or any compatible local server environment.
- Web browser.
- Basic knowledge of PHP and MySQL.

### Installation
1. Download and Install XAMPP:
- Download XAMPP from the official website.
- Install XAMPP and start the Apache and MySQL modules from the XAMPP Control Panel.

2. Clone the Repository:
- Clone this repository to your local machine or download the ZIP file and extract it.

3. Install Composer
- https://getcomposer.org/download/

### Running the Projects
- Pull Laravel/php project from git provider.
- Rename .env.example file to .env inside your project root and fill the database information. (windows wont let you do it, so you have to open your console cd your project root directory and run mv .env.example .env )
- Open the console and cd your project root directory
- Run composer install or php composer.phar install
- Run php artisan key:generate
- Run php artisan migrate
- Run php artisan db:seed to run seeders, if any.
- Run php artisan serve
- Open http://localhost:8000 on your browser
## if some reason your project stop working, do these:
- composer install
- php artisan migrate

## Project Structure
### Laravel Structure
- `app/`
  - `Console/` -> Contains custom Artisan commands
  - `Exceptions/` -> Contains exception handling classes
  - `Http/`
  - `Controllers/` ->  Controllers/ -> Contains controller classes
  - `Middleware/` -> Contains middleware classes
  - `Models/` -> Contains Eloquent models
  - `Providers/` -> Contains service providers
- `bootstrap/` -> Contains the application bootstrap files
- `config/` -> Contains configuration files
- `database/`
   - `factories/` -> Contains model factory files
   - `migrations/` -> Contains database migration files
   - `seeders/` -> Contains database seeders
- `public/`
   - `css/` -> Contains public CSS files
   - `js/` -> Contains public JavaScript files
   - `images/` -> Contains public image files
   - `index.php` -> The entry point for the application
- `resources/`
   - `js/` -> Contains JavaScript assets
   - `lang/` -> Contains localization files
   - `sass/` -> Contains Sass files
   - `views/` -> Contains Blade templates
- `routes/`
   - `api.php` -> Contains API routes
   - `channels.php` -> Contains channel routes for broadcasting
   - `console.php` -> Contains console commands routes
   - `web.php` -> Contains web routes
- `storage/`
  - `app/` -> Contains application storage files
  - `framework/` -> Contains framework-generated files and caches
  - `logs/` -> Contains application log files

## Contributor
1. M.Arkan Haris (2208107010022)
2. Alhusna Hanifah (2208107010060)
3. Nurul Uzratun Nashriyyah (2208107010030)
4. Zahra Zafira (2208107010040)
5. Fadli Ahmad Yazid (2208107010032)
6. Azri Harniza (2208107010034)
7. Widya Nurul Sukma (2208107010054)
8. Pryta Rosela (22081079010046)
9. Farah Nasywa (2208107010051)
10. Mila Lestari (2208107010002)
11. Ahmad Arif Nuhuda (240710402156202000)

## License
This project is licensed under the MIT License. See the LICENSE file for more details.

## Acknowledgements
- Original projects by PHPGurukul
- Laravel implementation inspired by various online Laravel  tutorials and resources

