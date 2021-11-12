<?php

spl_autoload_register(function ($class) {
    include 'class/' . $class . '.php';
});

$viewTask = new Task();
$val = $viewTask -> getTasks();

$nomer = 1;
foreach ($val as $key => $value) {
    $oneItem = $val[$key];
    if ($oneItem['finished']) {
        echo '<tbody><tr><td>' . $nomer . '</td>' . '<td>' . $oneItem['text'] . '</td>' . '<td><form method="POST" action="up_task.php"><input hidden value="' . $oneItem['id'] . '" name="id"><button class="btn btn-success" type="submit">&radic;</button></form></td>' . '<td><form method="POST" action="dell_task.php"><input hidden value="' . $oneItem['id'] . '" name="id"><button class="btn btn-danger" type="submit">x</button></form></td></tr></tbody>';
    } else {
        echo '<tbody><tr><td>' . $nomer . '</td>' . '<td>' . $oneItem['text'] . '</td>' . '<td><form method="POST" action="up_task.php"><input hidden value="' . $oneItem['id'] . '" name="id"><button class="btn btn-success" type="submit">+</button></form></td>' . '<td><form method="POST" action="dell_task.php"><input hidden value="' . $oneItem['id'] . '" name="id"><button class="btn btn-danger" type="submit">x</button></form></td></tr></tbody>';
    }
    $nomer++;
}
/*
foreach ($val as $key => $value) {
    $oneItem = $val[$key];
    if ($oneItem['finished']) {
        echo '<tbody><tr><td>' . $oneItem['id'] . '</td>' . '<td>' . $oneItem['text'] . '</td>' . '<td><form method="POST" action="up_task.php"><input hidden value="' . $oneItem['id'] . '" name="id"><button class="btn btn-success" type="submit">&radic;</button></form></td>' . '<td><form method="POST" action="dell_task.php"><input hidden value="' . $oneItem['id'] . '" name="id"><button class="btn btn-danger" type="submit">x</button></form></td></tr></tbody>';
    } else {
        echo '<tbody><tr><td>' . $oneItem['id'] . '</td>' . '<td>' . $oneItem['text'] . '</td>' . '<td><form method="POST" action="up_task.php"><input hidden value="' . $oneItem['id'] . '" name="id"><button class="btn btn-success" type="submit">+</button></form></td>' . '<td><form method="POST" action="dell_task.php"><input hidden value="' . $oneItem['id'] . '" name="id"><button class="btn btn-danger" type="submit">x</button></form></td></tr></tbody>';
    }
}
*/