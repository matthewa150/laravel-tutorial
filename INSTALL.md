# Setup and Info

## Install
The following packages are needed:

* `php`
* `mysql-server` (default DB)
* `php-zip`
* `php-bcmath`
* `php-mbstring`
* `php-xml`
* 'php-mysql'

## Software
* [Composer](https://getcomposer.org/download/) (Don't forget to add to path)
* [Laravel](https://laravel.com/docs/6.x)
* [TablePlus](https://tableplus.com/blog/2019/10/tableplus-linux-installation.html) (Nice DB browser)

## Misc.

### MySQL Quirks

#### Auth
As it stands at the time of this writing, users must use legacy passwords:
```sql
ALTER USER 'username'@'ip_address' IDENTIFIED WITH mysql_native_password BY 'password';
```
