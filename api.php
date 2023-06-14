<?php
header('Content-Type: application/json');
// $stringTest = [
//     "test1", "test2", "test3"
// ];
$todoListJson = file_get_contents("todoList.json");
$todoList = json_decode($todoListJson, true);

if (isset($_POST["newItem"])) {
    $newTask = [
        'task' => $_POST['newItem'],
        'isDone' => false
    ];
    $todoList[] = $newTask;
    file_put_contents("todoList.json", json_encode($todoList));
} else if (isset($_POST["changeIsDone"])) {
    $i = $_POST["changeIsDone"];
    $todoList[$i]["isDone"] = !$todoList[$i]["isDone"];
    file_put_contents("todoList.json", json_encode($todoList));
} else if (isset($_POST["removeItem"])) {
    $i = $_POST["removeItem"];
    array_splice($todoList, $i, 1);
    file_put_contents("todoList.json", json_encode($todoList));
}


echo json_encode($todoList);
