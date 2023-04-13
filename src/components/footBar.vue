<template>
    <div class="fot text-center d-flex flex-column">
      <div>
        <v-btn
          v-for="icon in icons"
          :key="icon"
          class="mx-4"
          :icon="icon"
          variant="text"
          href="https://www.facebook.com/profile.php?id=100086595534841"
        ></v-btn>
      </div>
  
      <!--
        <div class="pt-0">
        <p class="description">an id ultrices nunc. Sed at orci sed massa consectetur dignissim a sit amet dui. Duis commodo vitae velit et faucibus. Morbi vehicula lacinia malesuada. Nulla placerat augue vel ipsum ultrices, cursus iaculis dui sollicitudin. Vestibulum eu ipsum vel diam elementum tempor vel ut orci. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
      </div>
      -->
  
      <v-divider></v-divider>
  
      <div>
        {{ new Date().getFullYear() }} — <strong>Promacson</strong>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data: () => ({
      icons: [
        'mdi-facebook',
      ],
    }),
  }
  </script>
  
  <style scoped>
  .fot {
    background-image: url('https://cdn.vuetifyjs.com/images/backgrounds/vbanner.jpg');
    background-size: cover;
    color: white;
  }
  
  .description {
    font-size: 1.2rem;
    line-height: 1.5;
    margin: 1rem;
  }
  
  @media (max-width: 600px) {
    .description {
      font-size: 1rem;
      margin: 0.5rem;
    }
  }
  </style>
  