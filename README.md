# Installation
Navigate to the root of your webserver and then follow these steps

**Step 1:**

$ `curl -sS https://getcomposer.org/installer | php-cgi-5.4`

### Step 2:
$ `git clone git://github.com/lagom-/laravel-start-up.git`

### Step 3: 
$ `php-cli-5.4 composer.phar install`

### Step 4: 
$ `php-cli-5.4 composer.phar update`

### Step 5:
$ `php-cli-5.4 artisan:key generate`

# Configuration
In `app/config/app.php` change this:
`'url' => 'http://your-website.com'`
`'timezone' => 'Europe/Stockholm'`
`'locale' => 'swedish'`

In the `provider` array add:
`'Former\FormerServiceProvider'`
In the `aliases` array add:
`'Former' => 'Former\Facades\Illuminate'`

# Sources
