<template lang="">
    <div class="flex mr-6 gap-8 overflow-auto">
        <div
            v-for="(product, id) in products"
            :key="id"
            class="relative flex flex-col justify-end mb-2 h-80"
        >
            <div
                class="absolute flex items-center justify-center top-0 ml-10 w-40 h-40 rounded-full"
            >
                <p
                >imagen</p>
            </div>
            <div
                class="w-60 h-64 bg-white rounded-3xl flex-col flex justify-end p-6"
            >
                <h4 class="font-semibold">{{ product.name }}</h4>
                <p>starts</p>
   

                <div
                    class="font-semibold mt-6 flex justify-between items-center"
                >
                    {{ product.price }}
                    <button
                        @click="postOrder(product)"
                        class="bg-orange-600 py-2 px-4 text-white font-semibold rounded-full"
                    >
                        +
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div>
    </div>
</template>
<script>
export default {
  data() {
    return {};
  },
  props: {
    products: {
      type: Array,
      required: true,
    },
  },
  methods: {
    llamada() {
      this.$emit("orders");
    },

    postOrder(product) {
      this.$axios
        .post("/api/products/add", {
          name_product: product.name,
          price: product.price,
          count: 1,
          user_id: 1,
        })
        .then((result) => {
          this.llamada();
        })
        .catch((err) => {});
    },
  },
};
</script>
<style lang=""></style>
