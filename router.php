<?php
session_start();

header('Content-Type: text/html; charset=utf-8');

$url = explode("/", $_SERVER['REQUEST_URI']);
require_once("php/classes/User.php");
require_once("php/db.php");

// $content = file_get_contents("pages/index.php");

// for ($i=0; $i<count($url); $i++) {
//     echo $url[$i]."<hr>";
// }

// if ($url[1] == ("blog")) {
//     require_once("blog.php");
// }
// if($url[1] == ("index")) {
//     require_once("index.php");
// } else if ($url[1] == ("login")) {
//     require_once("login.php");
// }

if ($url[1] == ("blog")) {
    $content = file_get_contents("pages/blog.php");
} else if ($url[1] == ("login")) {
    $content = file_get_contents("pages/login.php");
} else if ($url[1] == ("reg")) {
    $content = file_get_contents("pages/register.html");
} else if ($url[1] == ("nobay")) {
    $content = file_get_contents("pages/nobay.html");
} else if ($url[1] == ("contact")) {
    $content = file_get_contents("pages/contact.html");
} else if ($url[1] == ("users")) {
    require_once("pages/users/index.html");
} else if ($url[1] == ("addUser")) {
    echo User::addUser($_POST['name'], $_POST['lastname'], $_POST['email'], $_POST['pass']);
} else if ($url[1] == ("authUser")) {
    echo User::authUser($_POST['email'], $_POST['pass']);
} else if ($url[1] == ("getUser")) {
    echo User::getUser($_SESSION['id']);
} else {
    $content = file_get_contents("pages/index.php");
}

if (!empty($content)) {
    require_once("template.php");
}
