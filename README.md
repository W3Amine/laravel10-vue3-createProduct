
# Laravel vuejs RestApi

A brief description of what this project does and who it's for

coded using laravel 10 & Vue 3 


Front-end info
## Front-end Info


using vue3 with vue-router to create a Single page APP 

Axios TO DEAL with REST API

Bootstrap 5 

vue 3 composition API with <script setup>

you will find the front-end file in \CreateProductChallenge\resources\js

with components , Pages , Composable   Folders 

with 3 routes / home   &&  /products/create  &&  404 PageNotFound


important used vue components : CreateProductForm && Product && ProductsList


--> vue files already compiled using npm run build







## API Reference

#### Get all products

```http
  GET /api/products/
```

#### STORE product

```http
  POST /api/products/
```
---> PARAMETERS (name, description , price , image , category)


#### DELETE product

```http
  DELETE /api/products/
```
---> PARAMETERS ( id )



#### GET THE LIST OF products belongs to the same category

```http
  GET /api/productsOfCategories
```
---> PARAMETERS ( category )




#### GET all categories

```http
  GET /api/categories/
```







## BACK-end info


### create migration with seeds / factory

php artisan db:seed

#### factories ready to create categories and products :D


## two controllers

app\Http\Controllers\API\ProductContoller.php

app\Http\Controllers\API\CategoryController.php


## two Models

app\Models\Product.php

app\Models\Category.php


## two Repositories

app\Repositories\CategoryRepository.php

app\Repositories\ProductRepository.php


## one request 

\app\Http\Requests\ProductRequest.php

## one resource 

\app\Http\Resources\ProductResource.php

## Uploaded Products photos stored in

\public\storage\ProductsImages

## Create product from cli with prompts

\app\Console\Commands\CreateProduct.php

#### php artisan product:create


## testing

php artisan test




