<template>
  <div>
    <v-toolbar
      dark
      prominent
      color="white"
      class="elevation-4"
      image="https://cdn.vuetifyjs.com/images/backgrounds/vbanner.jpg"
    >
      <v-btn @click="goHome" class="text headline" tag="a">
        <span v-if="!isSmallScreen">Tienda y Servicios Medicos </span> Promacson
      </v-btn>

      <v-spacer></v-spacer>

      <v-toolbar-items class="hidden-sm-and-down text">
        <v-btn text @click="goHome">Inicio</v-btn>
        <v-btn text @click="goProductos">Productos</v-btn>
        <v-btn text>Servicios</v-btn>
        <v-btn text>Nosotros</v-btn>
        <v-btn text @click="goContactanos">Encuentranos</v-btn>
      </v-toolbar-items>

      <v-toolbar-items class="hidden-md-and-up text">
        <div class="d-flex justify-space-around ">
          <v-menu transition="scale-transition">
            <template v-slot:activator="{ props }">
              <v-btn  v-bind="props"> Menu </v-btn>
            </template>

            <v-list>
              <v-list-item v-for="(item, i) in items" :key="i" @click="navigate(item.route)">
                <v-list-item-title>{{ item.title }}</v-list-item-title>
              </v-list-item>
            </v-list>c
          </v-menu>
        </div>
      </v-toolbar-items>
      
    </v-toolbar>
  </div>
</template>

<script>
export default {
  methods: {
    goHome() {
      this.$router.push({name: 'home' })
    },
    goContactanos() {
      this.$router.push({name: 'contactanos' })
    },
    goProductos() {
      this.$router.push({name: 'productos' })
    },
    navigate(route) {
      console.log("Navegando a la ruta:", route);
      this.$router.push({path: route })
      
    },
  },
  data: () => ({
    items: [
    { title: "Inicio", route: "/home" },
      { title: "Productos", route: "/productos" },
      { title: "Servicios", route: "/clickme" },
      { title: "Nosotros", route: "/clickme" },
      { title: "Encuentranos", route: "/contactanos" },
    ],
    isSmallScreen: false
  }),
  mounted() {
    this.isSmallScreen = window.innerWidth <= 600;
  }
};
</script>

<style scoped>
.text {
  color: white;
  font-weight: bold;
  font-size: 24px;
}
.v-toolbar {
  padding: 20px; 
}
.v-btn{
  font-size: 20px;
}
@media only screen and (max-width: 600px) {
  .text {
    font-size: 16px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }
}
</style>
