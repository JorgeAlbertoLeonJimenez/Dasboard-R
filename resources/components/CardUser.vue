<template lang="">
    <div class="p-6 bg-">
        <p>My Cart</p>
        <hr class="bg-black my-8" />
        <div class="overflow-auto  h-[533px] relative">
            <div>
                <ul>
                    <li v-for="order in orderUser" :key="order.id">
                        <div class="flex w-96 mb-6 h-32">
                            <div class="bg-red-300 w-36 h-auto">
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
                                        <span class="text-orange-400">x</span> {{ order.count }}
                                    </p>
                                </div>
                                <div class="flex justify-between flex-col items-end h-16">
                                    <i
                                        class="text-red-300 mt-5  fa-solid fa-trash fa-lg "
                                    ></i>
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
    orderUser: {},
  },
};
</script>
<style lang=""></style>
