<template>
    <v-container fluid class="container1">
       <h1>Nuestro Servicios</h1>
       <br>
       <div class="grid">
         <div class="col col1"><div class="service-name">Podologia</div></div>
         <div class="col col2"><div class="service-name">Cuidado de Heridas</div></div>
         <div class="col col3"><div class="service-name">Medico General</div></div>
       </div>
     </v-container>
     <v-container class="container1">
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sint facere ut recusandae minus cum temporibus iure corrupti magni consequuntur saepe, in at. Incidunt nam debitis natus nobis dolores eaque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta at quos libero dolore minus vero sunt repudiandae eius odio, adipisci atque autem ut ratione fuga ex mollitia dolorem? Quasi, eius?</p>
     </v-container>
 </template>
 
 <script>
 export default {
 
 }
 </script>
 
 <style scoped>
 .col1 {
   grid-column: 1 / span 1;
   grid-row: 1 / span 1;
   background-image: url('https://www.barrenacraus.com/wp-content/uploads/2021/01/Barrena-Craus-post-cuadrados-podologia.jpg');
   background-size: cover;
 }
 
 .col2 {
   grid-column: 2 / span 1;
   grid-row: 1 / span 1;
   background-image: url('https://postgrados.uss.cl/wp-content/uploads/2020/05/DIPLOMADO-EN-MANEJO-AVANZADO-DE-HERIDAS.png');
   background-size: cover;
 }
 
 .col3 {
   grid-column: 3 / span 1;
   grid-row: 1 / span 1;
   background-image: url('https://hospitalmedicalcenter.mx/wp-content/uploads/2021/03/medicinageneral.jpg');
   background-size: cover;
 }
 
 
 
 @media screen and (max-width: 700px) {
   .grid {
     grid-template-columns: 1fr;
   }
 
   .col1 {
     grid-row: 1 / span 1;
   }
 
   .col2 {
     grid-column: 1 / span 1;
     grid-row: 2 / span 1;
   }
 
   .col3 {
     grid-column: 1 / span 1;
     grid-row: 3 / span 1;
   }
 
   
 }
 
 </style>