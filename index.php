<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo-PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.scss">
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
</head>

<body>
    <div id="app">
        <div class="container">
            <h1>Test Vue in Php</h1>
            <h2>{{titolo}}</h2>
            <ul>
                <li v-for="item in apiData">{{item}}</li>
            </ul>
            <div>
                <input class="me-1" v-model="titolo" type="text">
                <button class="btn btn-warning">Clicca qui</button>
            </div>
        </div>
    </div>


    <script src="./main.js"></script>
</body>

</html>