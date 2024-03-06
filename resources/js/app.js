import { createApp } from 'vue'; // Importa createApp de Vue
import axios from 'axios';
import App from '/resources/App.vue'; // Importa el componente App desde el archivo correcto
import CardUser from '/resources/components/CardUser.vue'


const app = createApp(App); // Crea tu aplicación Vue

app.config.globalProperties.$axios = axios; 
app.component('card-user', CardUser);
app.mount('#app'); // Monta la aplicación en el elemento con el id 'app'
