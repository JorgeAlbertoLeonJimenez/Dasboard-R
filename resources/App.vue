<template>
  <div class=" flex flex-col justify-center items-center  gap-10 p-4 bg-orange-200 items-center">
    <div class=" flex gap-12 h-96 w-[1500px]">
      <div class="bg-green-500 w-[65%] overflow-hidden  mt-4 h-[300px] rounded-3xl">
    <img src="./assets/imgs/Banner hamburguesas doble color.jpg" alt="">
</div>

        <div class="bg-blue-400 w-[30%] overflow-hidden rounded-3xl">
           <img src="./assets/imgs/Diseño sin título.png" alt="">
        </div>
    </div>
    <menu-category></menu-category>
  </div>
 
</template>

<script>
export default {
  data() {
    return {
      products: [],
      orderUser: [],
      loader: '',
    };
  },
  methods: {
    getOrderUser() {


        this.$axios
        .get("/api/order/user")
        .then((result) => {
          this.orderUser = result.data;
        })
        .catch((err) => {})
        .finally(() => {
          this.loader = true;
        });
    },
  },
  mounted() {
    this.getOrderUser();
  },
};
</script>
