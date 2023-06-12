const { createApp } = Vue;

createApp({
  data() {
    return {
      newItem: "",
      apiData: [],
    };
  },
  methods: {
    addItem() {
      this.apiData.push(this.newItem);
      this.newItem = "";
    },
  },
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
