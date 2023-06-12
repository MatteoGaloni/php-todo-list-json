const { createApp } = Vue;

createApp({
  data() {
    return {
      titolo: "PROVA INTERPOLAZIONE",
    };
  },
  methods: {},
  mounted() {
    console.log(
      "Mounted Ok, ti mostro il contenuto del data (titolo)->",
      this.titolo
    );
  },
}).mount("#app");
