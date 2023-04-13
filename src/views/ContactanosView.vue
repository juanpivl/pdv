
<template>
  <v-container>
    <h1>Contáctanos</h1>
    <p>
      Tienes duda sobre algún producto en específico? No dudes en contactarnos o
      acudir a sucursal en un horario de 8:00 am a 6:00 pm de lunes a viernes
    </p>
    <br />
    <v-row>
      <v-col>
        <v-card-text class="contacto-container">
          <img src="@/assets/ubicacion.jpg" />
        </v-card-text>
      </v-col>

      <v-col cols="12" md="6">
        <v-card class="pa-4">
          <h2 class="mb-4">Encuéntranos</h2>

          <div class="my-4">
            <v-icon size="24" class="mr-2">mdi-phone</v-icon>
            <a href="tel:6624501230" class="primary--text" style="text-decoration: none">662 450 1230</a>
          </div>
          <div>
            <a
              href="https://wa.me/+526624501230"
              target="_blank"
              class="primary--text"
              style="text-decoration: none"
            >
              <v-icon size="24" class="mr-2">mdi-whatsapp</v-icon> WhatsApp: 662
              450 1230
            </a>
          </div>
<br>
          <div>
            <v-icon size="24" class="mr-2">mdi-map-marker</v-icon> Dirección:
            177 Juarez y Leon Guzman a un costado del IMSS
          </div>
          <div class="mt-4">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3486.0873391848395!2d-110.95499914845203!3d29.103102769288597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ce842b62b61bf3%3A0x3ef5f8da473011d5!2sC.%20Benito%20Ju%C3%A1rez%20177%2C%20Constitucion%2C%2083150%20Hermosillo%2C%20Son.!5e0!3m2!1ses-419!2smx!4v1680755773865!5m2!1ses-419!2smx"
              width="100%"
              height="300"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </v-card>
      </v-col>

      <v-col cols="12">
        <contactanosForm />
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
import { defineAsyncComponent } from "vue";
export default {
  components: {
    contactanosForm: defineAsyncComponent(() =>
      import("@/components/contactanosForm.vue")
    ),
  },
};
</script>

<style>
/* Estilos para hacer el formulario responsivo */
@media screen and (max-width: 600px) {
  .v-input__control {
    width: 100%;
  }
  .v-input__prepend-inner {
    display: none;
  }
}

/* Estilos para el fondo de imagen */
.contacto-container {
  border-radius: 10%;
  display: flex;
  align-items: center;
  justify-content: center;
}
.contacto-container img {
  max-width: 60%;
}

/* Estilos para el mapa de Google */
#map {
  height: 400px;
  width: 100%;
  margin-bottom: 50px;
}
</style>
