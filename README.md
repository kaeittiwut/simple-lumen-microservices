# Simple Lumen Microservices

![](Architecture.png)

This project was developed when I learned the microservice architecture that builds services and APIs with Lumen by instructor JuanD MeGon. And build a complete set of PHP microservices, APIs and its security layers using [Lumen Passport](https://github.com/dusterio/lumen-passport) (OAuth2).

## Serving your application

To serve your project locally in each microservice, you may use the Laravel Homestead virtual machine, Laravel Valet, or the built-in PHP development server by using this command:

**API Gateway:**

```bash
$ cd apiGateway

$ cp .env.example .env

$ composer install

$ php artisan migrate --seed

# Install encryption keys and other necessary stuff for Passport
$ php artisan passport:install

$ php -S localhost:8000 -t public
```

**Managing Clients:**

The simplest way to create a client is using the passport:client Artisan command.

```bash
$ php artisan passport:client
```

After this we will have the **_Client Secret_** for further use.

**Author Service:**

```bash
$ cd authorService

$ cp .env.example .env

$ php artisan migrate --seed

$ php -S localhost:8001 -t public
```

**Book Service:**

```bash
$ cd bookService

$ cp .env.example .env

$ php artisan migrate --seed

$ php -S localhost:8002 -t public
```

- **_Note: You can change port number as you like, But don't forget to change that port on the env file._**

## Seed Your database with Faker

Faker is a utility which generates random fake data. So, you can generate a seeder in each microservice by using this command:

```bash
$ php artisan db:seed
```

## Running Migrations

Run all of your outstanding migrations with seeder:

```bash
$ php artisan migrate --seed
```

If you would like to see which migrations have run thus far:

```bash
$ php artisan migrate:status
```

Roll back the latest migration operation. This command will rolls back the last "batch" of migrations, which may include multiple migration files:

```bash
$ php artisan migrate:rollback
```

Roll back all of your application's migrations:

```bash
$ php artisan migrate:reset
```

If you want to drop all table before seeding, you can use this command:

```bash
$ php artisan migrate:fresh --seed
```

## Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Lumen-Passport Documentation

Documentation for Making Laravel Passport work with Lumen. [Lumen-Passport Github](https://github.com/dusterio/lumen-passport).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
