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

    axios.get("./api.php").then((item) => {
      console.log("Questo è il contenuto della tua richiesta API: ", item);
    });
  },
}).mount("#app");
