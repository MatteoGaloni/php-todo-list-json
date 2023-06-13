const { createApp } = Vue;

createApp({
  data() {
    return {
      titolo: "PROVA - PROVA",
      newItem: { task: "", isDone: false },
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

    addNewItem() {
      const data = { newItem: this.newItem };
      this.sendData(data);
    },

    changeIsDone(i) {
      const data = { changeIsDone: i };
      this.sendData(data);
    },

    sendData(data) {
      // this.apiData.push(this.newItem);
      // this.newItem = "";

      axios
        .post("api.php", data, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((response) => {
          console.log("risultato di apiData con POST", response.data);
          this.apiData = response.data;
        });
    },
  },
  mounted() {
    console.log("Mounted Ok, ti do il benvenuto");

    this.getData();
  },
}).mount("#app");
