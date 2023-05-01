
  
<script setup>
import getCategories from '../composables/categories';
import { getProducts } from '../composables/products.js';

import { onMounted, reactive , ref } from 'vue'

const { categories, getCategoriesData } = getCategories();

onMounted(() => {
  getCategoriesData();

});




const { ServerErrors, storeProduct } = getProducts();

const form = reactive({
  name: "",
  price: "",
  categories: [] ,
  description: "",
});

const image = ref(null);

const onFileChange = (event) => {
  const selectedFile = event.target.files[0];
  image.value = selectedFile;
};

const saveProduct = async () => {

  await storeProduct({ ...form } , image );
}

console.log(ServerErrors);




</script>



<template>
  <div class="text-center text-danger" v-if="ServerErrors">
    <p v-html="ServerErrors"></p>
  </div>


  <!-- Create product Form -->
  <form class="col-md-5 mx-auto my-5" @submit.prevent="saveProduct" enctype="multipart/form-data">

    <div class="form-floating my-2">
      <input type="text" v-model="form.name" name="name" class="form-control" id="floatingInput"
        placeholder="name@example.com">
      <label for="floatingInput">Product name</label>
    </div>
    <div class="form-floating  my-2">
      <input type="number" v-model.number="form.price" name="price" class="form-control" id="price" placeholder="price">
      <label for="price">Password</label>
    </div>

    <select name="categories[]" multiple v-model="form.categories" class="form-select multiple form-select-lg mb-3">

      <!-- loop over categories -->
      <option v-for="category in categories" :value="category.id" :key="category.id">{{ category.name }}</option>

    </select>

    <div class="form-floating  my-2">
      <textarea class="form-control" v-model="form.description" name="description" id="Description"
        placeholder="Description"></textarea>
      <label for="Description">Description</label>
    </div>


    <div>
      <label for="image" class="form-label">product image </label>
      <input type="file" @change="onFileChange" class="form-control form-control-lg" name="image" id="image">
    </div>


    <button type="submit" class="btn btn-lg btn-primary d-block mx-auto my-4 px-3 py-2"> create product </button>

  </form>
  <!-- Create product Form -->
</template>