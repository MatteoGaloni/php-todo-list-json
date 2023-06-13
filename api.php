<?php
// $stringTest = [
//     "test1", "test2", "test3"
// ];
$todoListJson = file_get_contents("todoList.json");
$todoList = json_decode($todoListJson, true);

if (isset($_POST["newItem"])) {
    $todoList[] = json_decode($_POST["newItem"]);
    file_put_contents("todoList.json", json_encode($todoList));
}

header('Content-Type: application/json');
echo json_encode($todoList);
