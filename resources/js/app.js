import { createApp } from "vue"; // Importa createApp de Vue
import axios from "axios";
import App from "/resources/App.vue"; // Importa el componente App desde el archivo correcto
import CardUser from "/resources/components/CardUser.vue";
import MenuCategory from "/resources/components/MenuCategory.vue";
import Products from "/resources/components/Products.vue";
import AddProduct from "../components/AddProduct.vue";

const app = createApp(App); // Crea tu aplicación Vue

app.config.globalProperties.$axios = axios;
app.component("card-user", CardUser);
app.component("menu-category", MenuCategory);
app.component('products-from-categories', Products);
app.component('add-product', AddProduct);
app.mount("#app"); // Monta la aplicación en el elemento con el id 'app'
