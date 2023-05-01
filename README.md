
# Project Title

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







## Acknowledgements

 - [Awesome Readme Templates](https://awesomeopensource.com/project/elangosundar/awesome-README-templates)
 - [Awesome README](https://github.com/matiassingers/awesome-readme)
 - [How to write a Good readme](https://bulldogjob.com/news/449-how-to-write-a-good-readme-for-your-github-project)

