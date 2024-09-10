<?php

    $string = file_get_contents('./data/todo-list.json');

    $todoData = json_decode($string);

    header('content-type: application/json');
    
    echo $string;

?>