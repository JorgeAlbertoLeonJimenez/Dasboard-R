<template>
  <div
    class="absolute flex justify-center items-center w-[100%] h-[2000px] bg-opacity-60 bg-red-300"
    :class="{ flex: activate, hidden: !activate }"
  >
    <div
      class="bg-orange-400 rounded-3xl relative p-10 w-[700px] flex justify-center"
    >
      <div>
        <button
          @click="close()"
          class="bg-white rounded-2xl absolute top-0 right-0 p-4"
        >
          Cerrar
        </button>
      </div>

      <form @submit.prevent="submitForm">
        <div class="w-400px">
          <label for="name" class="font-semibold"
            >Nombre:
            <input
              class="py-2 px4 w-full rounded-3xl pl-3"
              type="text"
              name="name"
              placeholder="Ingrese el nombre del producto"
              v-model="formData.name"
            />
          </label>
          <br />
          <br />
          <label for="price" class="font-semibold"
            >Precio:
            <input
              type="text"
              class="py-2 px4 w-full rounded-3xl pl-3"
              name="price"
              v-model="formData.price"
            />
          </label>
          <br />
          <br />
          <label for="description" class="font-semibold"
            >Descripción:
            <input
              type="text"
              class="py-2 px4 w-full rounded-3xl pl-3"
              name="description"
              v-model="formData.description"
            />
          </label>
          <br />
          <br />
          <label for="categoria" class="font-semibold"
            >Categoría:
            <select
              class="py-2 px4 w-full rounded-3xl pl-3"
              name="category_id"
              v-model="formData.category_id"
            >
              <option value="1">Drink</option>
              <option value="2">Fruts</option>
              <option value="3">Burguers</option>
            </select>
          </label>
          <br />
          <br />
        </div>

        <div class="flex justify-center">
          <button
            class="bg-orange-500 rounded-3xl text-white px-6 py-3"
            type="submit"
          >
            Enviar
          </button>
        </div>
      </form>
    </div>
  </div>
</template>
  
  <script>
export default {
  props: {
    activate: Boolean,
  },
  data() {
    return {
      formData: {
        name: "",
        price: "",
        description: "",
        category_id: "",
      },
    };
  },
  methods: {
    close() {
      this.$emit("close");
    },
    submitForm() {
      this.$axios
        .post("/api/products/create", this.formData)
        .then((response) => {
          this.close()
        })
        .catch((error) => {
          if (error) {
          }
        });
    },
  },
};
</script>
  
  <style>
</style>
  