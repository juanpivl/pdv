<template>
  <div class="container2">
    <div class="image-container">
      <v-img :src="productoSeleccionado.image" height="400px" width="100%" contain> </v-img>
    </div>
    <div class="product-description">
      <h1>{{ productoSeleccionado.title }}</h1>
      <h2>Descripción</h2>
      <div v-html="productoSeleccionado.descripcion"></div>
      <v-card-actions>
        <v-btn text @click="goBack">Volver</v-btn>
      </v-card-actions>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      productoSeleccionado: {},
    };
  },
  computed: {
    productos() {
      return this.$store.getters.productos;
    },
  },
  methods: {
    goBack() {
      this.$router.go(-1);
    },
  },
  created() {
    // obtenemos el ID del producto de la URL
    const id = this.$route.params.id;

    // buscamos el producto en el array de productos
    this.productoSeleccionado = this.productos.find((producto) => producto.id == id);
  },
};
</script>

<style scoped>
.container2 {
  width: 100%;
  border: 1px solid #e0e0e0;
  padding: 4%;
}

.image-container {
  float: left;
  width: 33%;
  height: 400px;
  overflow: hidden;
}

.product-description {
  float: left;
  width: 67%;
  height: 400px;
  overflow-y: auto;
  padding-left: 30px;
}

.product-description h1 {
  margin-top: 0;
}

.product-description p {
  margin-bottom: 0;
}
</style>
