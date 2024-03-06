<template>
  <div class="flex justify-center items-center">
    <div class="max-w-[300px]">
      <h4>Menu Category</h4>
      <div class="flex max-w-screen overflow-auto gap-10">
        <div
          class="flex flex-col items-center justify-center text-center gap-6 bg-orange-400 rounded-3xl m-2 p-6"
          v-for="product in products"
          :key="product.id"
        >
          <div class="bg-slate-900 w-16 h-16"></div>

          <p>{{ product.name }}</p>

          <button
            class="rounded-full bg-white text-orange-400 py-1 px-3"
            @click="postProduct(product)"
          >
            <i class="fa-solid fa-greater-than"></i>
          </button>
        </div>
      </div>
    </div>
    <card-user :orderUser="orderUser"></card-user>
  </div>
</template>

<script>
export default {
  data() {
    return {
      products: [],
      orderUser: [],
    };
  },
  methods: {
    getProducts() {
      this.$axios
        .get("/api/products")
        .then((result) => {
          this.products = result.data;
          console.log("productos", this.products);
        })
        .catch((err) => {
          console.log("error de consulta");
        });
    },
    postProduct(product) {
      this.$axios
        .post("/api/products/add", {
          name_product: product.name,
          price: product.price,
          count: 1,
          user_id: 1,
        })
        .then((result) => {
          console.log(result);
        })
        .catch((err) => {})
        .finally(() => {
          this.getOrderUser();
        });
    },
    getOrderUser() {
      this.$axios
        .get("/api/order/user")
        .then((result) => {
          this.orderUser = result.data;
        })
        .catch((err) => {});
    },
  },

  mounted() {
    this.getProducts();
    this.getOrderUser();
  },
};
</script>

