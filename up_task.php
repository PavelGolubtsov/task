<?php

spl_autoload_register(function ($class) {
    include 'class/' . $class . '.php';
});

$id = $_POST['id'];

$upTask = new Task();
$upTask -> finish($id);

header('Location: index.php');