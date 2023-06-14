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
        <div class="container mt-3" style="width: 30rem;">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">ToDo List php</h1>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item list-group-item-danger" v-for="(item, i) in apiData">
                            <div class="d-flex">
                                <h5 @click="changeIsDone(i)" :class="(item.isDone) ? 'striked' : '' ">{{item.task}}</h5>
                                <input class="ms-3" type="checkbox" @click="changeIsDone(i)">
                            </div>
                            <div class="input-group mb-3">
                                <input class="form-control" v-model="apiData[i].task" type="text">
                            </div>
                            <button @click="removeItem(i)" class="btn btn-success">Remove Item</button>
                        </li>
                    </ul>
                    <div class="input-group my-3">
                        <input placeholder="Inserisci una nuova attività" class="form-control" @keyup.enter="addNewItem()" v-model="newItem" type="text">
                    </div>
                    <button @click="addNewItem()" class="btn btn-warning">Aggiungi</button>
                </div>
            </div>
        </div>
    </div>
    <script src="./main.js"></script>
</body>

</html>