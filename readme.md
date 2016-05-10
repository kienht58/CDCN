# Link never die - Selected Topics on Technology

### Requirement to install on local
Your PC need:
* LAMP (Linux + Apache + Mysql + PHP). If your OS is Window, your need install XAMPP/WAMPServer/...
* Composer

### Installation
Run command line:
```sh
$ git clone https://github.com/kienht58/CDCN.git
$ cd CDCN
$ composer update
$ cp .env.example .env
$ php artisan key:generate
```
Open .env file, change ```DB_DATABASE``` is your database's name, ```DB_USERNAME``` and ```DB_PASSWORD``` is username and password to connect database.

Next, run:
```sh
$ php artisan migrate
```
If your OS is Linux, you can run:
```sh
$ php artisan serve
```
to start server. And access to [localhost:8000](localhost:8000)

If your OS is Window, you need start Apache and access to [localhost/CDCN/public](localhost/CDCN/public)

