const { createApp } = Vue;

createApp({
  data() {
    return {
      titolo: "PROVA - PROVA",
      newItem: { task: "Tagliare il prato", isDone: false },
      apiData: [],
    };
  },
  methods: {
    getData() {
      axios.get("./api.php").then((response) => {
        console.log(
          "Questo è il contenuto della tua richiesta API: ",
          response
        );
        this.apiData = response.data;
      });
    },

    addItem() {
      // this.apiData.push(this.newItem);
      // this.newItem = "";
      const data = { newItem: this.newItem };
      axios
        .post("./api.php", data, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((response) => {
          this.apiData = response.data;
          console.log("risultato di apiData con POST", this.response);
        });
    },
  },
  mounted() {
    console.log("Mounted Ok, ti do il benvenuto");

    this.getData();
  },
}).mount("#app");
