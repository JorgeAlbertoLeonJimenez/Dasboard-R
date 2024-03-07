<template lang="">
    <div class="p-6 bg-white rounded-3xl">
        <div class="flex justify-between">
            <p>My Cart</p>

            <p class="font-bold">$ {{ totalPrice }}</p>
        </div>
        <hr class="bg-black my-8" />
        <div class="overflow-auto w-[400px] h-[533px] relative">
            <div>
                <ul>
                    <li v-for="order in orderUser" :key="order.id">
                        <div  class="flex w-96 mb-6 h-32">
                            <div class="bg-red-300 rounded-2xl px-3 w-36 h-auto">
                                <img src="" alt="icono" />
                            </div>
                            <div
                                class="bg-cartPrimary flex items-center justify-between gap-2 py-4 px-8 my-2 w-full rounded-r-full"
                            >
                                <div>
                                    <p class="font-semibold">
                                        {{ order.name_product }}
                                    </p>
                                    <p class="font-medium">
                                        <span class="text-orange-400">x</span>
                                        {{ order.count }}
                                    </p>
                                </div>
                                <div
                                    class="flex justify-between flex-col items-end h-16"
                                >
                                    <button
                                        @click="
                                            deleteProduct(
                                                order.user_id,
                                                order.id
                                            )
                                        "
                                        type=""
                                    >
                                        <i
                                            class="text-red-300 mt-5 fa-solid fa-trash fa-lg"
                                        ></i>
                                    </button>
                                    <p class="mt-4">${{ order.price }}</p>
                                </div>
                            </div>
                        </div>
                       
                    </li>
                </ul>
            </div>
        </div>
       
    </div>
</template>
<script>
export default {
  data() {
    return {};
  },
  props: {
    orderUser: {
      type: Array,
    },
    totalPrice: {
      type: Number,
    },
  },
  methods: {
    getOrders() {
      this.$emit("orders");
    },

    deleteProduct(user_id, id) {
      this.$axios
        .delete(`/api/products/delete/order/${user_id}/${id}`)
        .then((result) => {
          this.getOrders();
        })
        .catch((err) => {});
    },
  },
};
</script>
<style lang=""></style>
