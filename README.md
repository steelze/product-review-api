# Product Review API

## Introduction
Product Review is a Laravel powered API that allows users to add, view, update and delete products. Users will also be able to rate and review a product.
This project is based on the tutorial [Build a Product Review REST API with Laravel](https://dev.to/mr_steelze/build-a-product-review-rest-api-with-laravel-2ih8)

![alt text](https://raw.githubusercontent.com/Steelze/product-review-api/master/public/screenshot.jpg)

## Table of Contents
1. <a href="#technology-stack">Technology Stack</a>
2. <a href="#application-features">Application Features</a>
3. <a href="#api-endpoints">API Endpoints</a>
4. <a href="#setup">Setup</a>
5. <a href="#author">Author</a>
6. <a href="#license">License</a>

## Technology Stack
  - [PHP](https://www.php.net)
  - [Composer](https://getcomposer.org)
  - [MySql](https://www.mysql.com)
  - [Laravel](https://laravel.com)
  
## Application Features
* User can signup and signin
* User can add and view products
* User can update or delete his product
* User can add reviews for a product
* User can update or delete his review

## API Endpoints
Method | Route | Description
--- | --- | ---
`POST` | `/api/register` | Create a user
`POST` | `/api/login` | Login an already registered user
`GET` | `/api/products` | View all products
`GET` | `/api/products/:id` | View a single product
`POST` | `/api/products/:productId/reviews` | Create a review for a product
`PUT` | `/api/products/:productId/reviews/:reviewId` | Update a product review
`DELETE` | `/api/products/:productId/reviews/:reviewId` | Delete a product review

## Setup
These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

  ### Dependencies
  - [PHP](https://www.php.net)
  - [Composer](https://getcomposer.org)
  - [MySql](https://www.mysql.com)
  - [Laravel](https://laravel.com)
 
  ### Getting Started
    ```
    $ git clone https://github.com/Steelze/product-review-api.git
    $ cd product-review-api
    $ composer install
    ```
  - Duplicate and save .env.example as .env and fill in environment variables
    ```
    $ php artisan migrate
    ```
  ### Run The Service
  ```
  $ php artisan serve
  ```

## Author
Odunayo Ileri Ogungbure

## License
MIT
