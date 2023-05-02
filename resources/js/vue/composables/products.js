import { ref } from "vue";
import axios from "axios";
import {useRouter} from "vue-router";

export function getProducts() {
    const products = ref([]);
    const router = useRouter();
    const ServerErrors = ref("");

    const getProductsData = async () => {
        let response = await axios.get("/api/products/");
        products.value = response.data.data;
    };

    const storeProduct = async (data , file ) => {
        ServerErrors.value = '';
        const formData = new FormData();
        formData.append('name', data.name);
        formData.append('price', data.price);
        formData.append('description', data.description);
        formData.append('categories[]', data.categories);
        formData.append('image', file.value);

        try {
        await axios.post("/api/products/" , formData);
        await router.push('/');
    } catch (e){
        if (e.response.status === 422) {
            for(const key in e.response.data.errors) {
                ServerErrors.value += e.response.data.errors[key][0] + "<br>";
            }
        }
    }
        };

    const destroyProduct = async (id) => {
        await axios.delete("/api/products/" + id);
    };

    const GetAllProductsOfCategories = async (ids) => {
        let string = "";
        console.log([...ids]);
         string = "?";
        for (let  i = 0 ; i < [...ids].length ; i++) {
            string += 'ids[]=' + [...ids][i] + '&';
        }
        let response = await axios.get("/api/productsOfCategories" + string);
        products.value = response.data.data;

    };
    return { products, getProductsData, ServerErrors , storeProduct , destroyProduct , GetAllProductsOfCategories };
}
