const { createApp } = Vue;

createApp({
  data() {
    return {
      titolo: "PROVA INTERPOLAZIONE",
      apiData: [],
    };
  },
  methods: {},
  mounted() {
    console.log(
      "Mounted Ok, ti mostro il contenuto del data (titolo)->",
      this.titolo
    );

    axios.get("./api.php").then((response) => {
      console.log("Questo è il contenuto della tua richiesta API: ", response);
      this.apiData = response.data;
    });

    console.log("Il valore salvato nel data dopo la chiamata è", this.apiData);
  },
}).mount("#app");
