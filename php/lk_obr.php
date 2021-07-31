<?php

session_start();

header('Content-Type: text/html; charset=utf-8');

$mysqli =  mysqli_connect(
    "localhost",
    "televir4_sdo0769",
    "&oD47f4Z",
    "televir4_sdo0769"
);

if ($mysqli == false) {
    print("error");
} else {
    $inputValue = $_POST['value'];  // значение  на которое меняем
    $item = $_POST['item']; // имя или фамилия
    $id = $_SESSION['id'];

    //  меняем имя и фамилию на новые по id сессии
    $mysqli->query("UPDATE `users` SET `$item` = '$inputValue' WHERE `id` = '$id' ");

    // и в сессии тоже
    $_SESSION[$item] = $inputValue;
}
