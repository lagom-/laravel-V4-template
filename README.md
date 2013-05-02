# Installation

Navigate to the root of a directory on your server and then follow these steps

**Step :**

$ `curl -sS https://getcomposer.org/installer | php-cgi-5.4`

**Step :**

Download the latest version of the [**Laravel framework**](https://github.com/laravel/laravel/archive/develop.zip) and extract its contents into the directory.

**Step :**

Download the latest version of this [**branch**](https://github.com/lagom-/laravel-V4-template/archive/master.zip) and extract its contents into the same directory, owerwrite files when asked.

**Step :**

$ `php-cli-5.4 composer.phar install`

**Step :**

$ `php-cli-5.4 composer.phar update`

**Step :**

$ `php-cli-5.4 artisan:key generate`

# Configuration
In `app/config/app.php` change

`'url' => 'http://your-website.com'`

`'timezone' => 'Europe/Stockholm'`

`'locale' => 'swedish'`

In the `provider` array add:

`'Former\FormerServiceProvider'`

`ExpressiveDateServiceProvider`

In the `aliases` array add:

`'Former' => 'Former\Facades\Illuminate'`

# Sources
https://github.com/laravel/framework

https://github.com/mogetutu/laravel-curl

https://github.com/Anahkiasen/former

https://github.com/awareness/aware

https://github.com/jasonlewis/expressive-date

https://github.com/twitter/bootstrap

https://github.com/todc/todc-bootstrap

https://github.com/eternicode/bootstrap-datepicker (soon)

https://github.com/jdewit/bootstrap-timepicker (soon)
