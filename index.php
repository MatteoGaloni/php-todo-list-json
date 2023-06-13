<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo-PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.scss">
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</head>

<body class="bg-dark">
    <div id="app">
        <div class="container bg-danger mt-3">
            <h1>Test Vue in Php</h1>
            <h2>Risposta a chiamata API:</h2>
            <div>
                <ul>
                    <li @click="changeIsDone(i)" :class="(item.isDone) ? 'striked' : '' " v-for="(item, i) in apiData">{{item.task}}</li>
                </ul>
            </div>
            <div>
                <input @keyup.enter="addNewItem()" class="me-1" v-model="newItem.task" type="text">
                <button @click="addNewItem()" class="btn btn-warning">Aggiungi elemento all'array</button>
            </div>

        </div>
    </div>
    <script src="./main.js"></script>
</body>

</html>