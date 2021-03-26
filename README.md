# Simple Lumen Microservices

Create Services and APIs with Lumen by Laravel, build a complete set of PHP microservices and APIs and its security layers using Lumen and OAuth2.

## Serving your application

To serve your project locally in each microservice, you may use the Laravel Homestead virtual machine, Laravel Valet, or the built-in PHP development server:

**Author service:**

```bash
$ cd authorService

$ php artisan migrate --seed

$ php -S localhost:8000 -t public
```

**Book service:**

```bash
$ cd bookService

$ php artisan migrate --seed

$ php -S localhost:8001 -t public
```

**Note: You can change port number as you like.**

## Migrate your database

```bash
$ php artisan migrate --seed
```

## Seed Your database with Faker

Faker is a utility which generates random fake data. So, you can generate a seeder in each microservice by using this command:

```bash
$ cd authorService

$ php artisan db:seed
```

**Note: If you want to drop all table before seeding, you can use this command.**

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

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).