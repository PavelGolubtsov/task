<?php

spl_autoload_register(function ($class) {
    include 'class/' . $class . '.php';
});

$id = $_POST['id'];

$dellTask = new Task();
$dellTask -> del($id);

header('Location: index.php');