<template>
  <div class="container">
    <v-text-field
      v-model="searchTerm"
      placeholder="Buscar producto"
      outlined
      dense
      class="mx-2"
      persistent-placeholder
    ></v-text-field>
    <v-card-group class="scroll">
      <a
        v-for="producto in productosFiltrados"
        :key="producto.id"
        style="text-decoration: none"
        :href="`#/productos/${producto.id}`"
      >
        <v-card height="300px" width="250px" v-on:click.stop>
          <v-img :src="producto.image" height="200px" cover></v-img>
          <v-card-title>{{ producto.titulo }}</v-card-title>
          <v-card-subtitle>{{ producto.descripcion }}</v-card-subtitle>
        </v-card>
      </a>
    </v-card-group>
  </div>
</template>

<script>
import { mapGetters } from 'vuex';

export default {
  computed: {
    ...mapGetters(['productos']),
    productosFiltrados() {
      if (!this.searchTerm) {
        return this.productos;
      } else {
        // filtrar los productos por título o descripción
        return this.productos.filter(
          (producto) =>
            producto.titulo.toLowerCase().includes(this.searchTerm.toLowerCase()) ||
            producto.descripcion.toLowerCase().includes(this.searchTerm.toLowerCase())
        );
      }
    },
  },
  data() {
    return {
      searchTerm: '',
    };
  },
  created() {
    this.$store.dispatch('fetchProductos');
  },
};
</script>

<style scoped>
.container {
  background-color: #fafafa;
  width: 100%;
  border: 1px solid #e0e0e0;
  height: calc(100vh - 64px);
  display: flex;
  flex-direction: column;
  padding: 1%;
}

.scroll {
  height: 100%;
  overflow-y: auto;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
}

/* Ajuste estético de la barra de desplazamiento */
::-webkit-scrollbar {
  width: 10px;
}

::-webkit-scrollbar-track {
  background: #f1f1f1;
}

::-webkit-scrollbar-thumb {
  background-color: #c7c7c7;
  border-radius: 10px;
}

::-webkit-scrollbar-thumb:hover {
  background-color: #a9a9a9;
}
</style>
