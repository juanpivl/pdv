
<template>
  <v-carousel
    hide-delimiters
    height="300"
    cycle
    class="container"
    show-arrows="hover"
  >
    <v-carousel-item
      v-for="(item, i) in items"
      :key="i"
      :src="item.src"
      cover
    ></v-carousel-item>
  </v-carousel>
</template>

<script>
export default {
  data() {
    return {
      items: [
        {
          src: require("@/assets/tienda.jpg"),
        },
        {
          src: require("@/assets/bsn.png"),
        },
        
        {
          src: require("@/assets/jobst.png"),
        },
        {
          src: "https://cdn.vuetifyjs.com/images/carousel/planet.jpg",
        },
      ],
    };
  },
};
</script>

<style>
.container {
  border-radius: 2%;
}
</style>