<template>
  <div class="flex">
    <div class="flex flex-col justify-between w-[1000px]">
      <div class="flex px-6 flex-col gap-12">
        <div class="flex font-semibold items-center justify-between">
          <h4>Menu Category</h4>
          <button
            class="p-3 bg-orange-500 text-white rounded-2xl"
            @click="addProduct()"
            type="button"
          >
            Agregar producto
          </button>
        </div>
        <div class="flex max-w-screen overflow-auto gap-10">
          <div
            v-for="product in products"
            :key="product.id"
            :class="['flex', 'flex-col', 'items-center', 'justify-center', 'text-center', 'gap-6', 'rounded-3xl', 'm-2', 'p-6', product.id === productCategory ? 'bg-orange-500' : 'bg-white']"
          >
            
            <p class="font-bold">{{ product.name }}</p>
            <button
              class="rounded-full bg-white text-orange-400 py-1 px-3"
              @click="selection(product.id)"
            >
              <i class="fa-solid fa-arrow-down fa-md"></i>
            </button>
          </div>
        </div>
      </div>
      <products-from-categories
        :products="Object.values(category)"
        @orders="getOrders()"
      ></products-from-categories>
    </div>
    <card-user
      :orderUser="orderUser"
      :totalPrice="totalPrice"
      @orders="getOrders()"
    ></card-user>
  </div>

  <add-product @close="addProduct()" :activate="add"></add-product>
</template>

<script>
export default {
  data() {
    return {
      products: [],
      productCategory: 1,
      category: [],
      orderUser: [],
      totalPrice: 0,
      add: false,
    };
  },
  methods: {
    getProducts() {
      this.$axios
        .get("/api/products/category")
        .then((result) => {
          this.products = result.data;
        })
        .catch((err) => {
          console.error(err);
        });
    },
    selection(category) {
      this.productCategory = category;
      this.getCategoria();
    },
    getCategoria() {
      this.$axios
        .get("/api/products/viewProduct", {
          params: {
            id: this.productCategory,
          },
        })
        .then((result) => {
          this.category = result.data;
        })
        .catch((err) => {
          console.error(err);
        });
    },
    getOrders() {
      this.$axios
        .get("/api/order/user")
        .then((result) => {
          this.orderUser = result.data.orders;
          this.totalPrice = result.data.totalPrice;
        })
        .catch((err) => {
          console.error("Error fetching orders:", err);
        });
    },
    addProduct() {
      this.add = !this.add;
      console.log(this.add);
    }
  },
  mounted() {
    this.getProducts();
    this.getCategoria();
    this.getOrders();
  },
};
</script>
