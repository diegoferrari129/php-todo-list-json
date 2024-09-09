<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS -->
    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- JS -->
     <!-- axios -->
     <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
     <!-- vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

</head>
<body>
    <!-- mount -->
     <div id="app">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ol>
                        <li v-for="item, index in todoData" key="index">
                            {{ item.name }}
                        </li>
                    </ol>
                </div>
            </div>
        </div>
     </div>
    
    <!-- script.js -->
    <script src="./js/script.js"></script>
</html>