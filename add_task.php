<?php

spl_autoload_register(function ($class) {
    include 'class/' . $class . '.php';
});

$text = $_POST['task'];

$addTask = new Task();
$addTask -> add($text);

header('Location: index.php');