# Contacts

Contact Management Web application

## 🚀 Starting

These instructions will get you a copy of the project up and running on your local machine.

### 📋 Prerequisites

What things you need to install the software and how to install them?

* [Docker](https://www.docker.com/)
* [Docker Compose](https://docs.docker.com/compose/install/)
* [Git](https://git-scm.com/)
* [Repository](https://github.com/JadisDev/test-contacts)

### 🔧 Installation

A series of step-by-step examples that tell you how to get a development environment running.

Go to the directory where you want to install the project and clone the source code:

```
git@github.com:JadisDev/test-contacts.git
```

Enter the directory:

```
cd test-contacts
```

Copy and paste .env.example and rename it to .env in the project root.
Change the values of the environment variables:

```
DB_CONNECTION=pgsql
DB_HOST=172.18.0.4
DB_PORT=5432
DB_DATABASE=postgres
DB_USERNAME=postgres
DB_PASSWORD=secret
```

Install project dependencies with composer:

```
composer install
```
Create tables:

```
php artisan migrate
```

At the end, access http://localhost:8000/

![image](https://github.com/JadisDev/test-contacts/assets/20782995/9a5982bd-9761-490b-a128-aadf2de7c3da)


## 🛠️ Construído com

Tools used in the project

* [PHP >= 7.3 || >= 8.0](https://www.php.net/) - Language
* [Laravel](https://laravel.com/) - Framework

## ✒️ Autor

* **Lead Developer** [Jadis Jale](https://github.com/JadisDev)


---
⌨️ with ❤️ by [Jadis Jale](https://github.com/JadisDev) 😊