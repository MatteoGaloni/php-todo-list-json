<?php
$stringTest = [
    "test1", "test2", "test3"
];

header('Content-Type: application/json');
echo json_encode($stringTest);
