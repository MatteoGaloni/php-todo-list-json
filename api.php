<?php
// $stringTest = [
//     "test1", "test2", "test3"
// ];
$todoListJson = file_get_contents("todoList.json");
$todoList = json_decode($todoListJson, true);



header('Content-Type: application/json');
echo json_encode($todoList);
