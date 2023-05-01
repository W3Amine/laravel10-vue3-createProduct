
<script setup>
import Product from './Product.vue';
import {getProducts} from '../composables/products.js';
import {onMounted } from 'vue';





const { products , getProductsData , destroyProduct , GetAllProductsOfCategories } = getProducts();

onMounted(() => {
    getProductsData();
});



const  deleteCompany = async (id) => {

if(!window.confirm('are you sure !')){
    return ;
}
await destroyProduct(id);
await getProductsData();

}




// ########################################

import getCategories from '../composables/categories';

import {  ref , watch } from 'vue'

const selectedOptions = ref([]);



watch(selectedOptions, (selectedOptionsUpdated) => {
  console.log(selectedOptionsUpdated);
  GetAllProductsOfCategories(selectedOptionsUpdated);
})


const { categories, getCategoriesData } = getCategories();


onMounted(() => {
    getCategoriesData();

});

// #################################################






</script>



<template>

   <!-- sidebar + Products List -->
   <section class="">
        <div class="container">
            <div class="row">


             <!-- ################ SIDE BAR ####################################### -->
               <!-- sidebar -->
    <div class="col-lg-3">
        <div class="card d-lg-block mb-5">
            <div class="accordion">
                <div class="accordion-item">
                    <div class="p-3 h4 text-center"> Brands </div>

                    <div class="accordion-body">
                            <!-- Checked checkbox -->
                            <div class="form-check" v-for="category in categories" :key="category.id">
                               
                                <input v-model="selectedOptions" class="form-check-input" type="checkbox" :value="category.id"
                                    :id="category.name + 'ID'">
                                <label class="form-check-label" :for="category.name + 'ID'">{{ category.name }}</label>
                            </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- sidebar -->


           
             <!-- ##################### SIDE BAR  ################################## -->


    <!-- products List -->
    <div class="col-lg-9">
     
        <div class="row">
      

            <Product  v-for="product in products" v-bind="product" :key="product.id" @delete-product="deleteCompany" />

            
        </div>
    </div>
    <!-- products List -->

</div>
        </div>
    </section>

    <!-- sidebar + Products List -->

</template>