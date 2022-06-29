<?php include "database.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dischi</title>
</head>
<body>
    
    <div id="app">
        <div v-for="(item, i) in arrayDischi" :key="i">
            <img :src="item.poster" :alt="item.title">
            <h2>{{item.title}}</h2>
            <div>{{item.author}}</div>
            <div>{{item.year}}</div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="myscript.js"></script>
</body>
</html>