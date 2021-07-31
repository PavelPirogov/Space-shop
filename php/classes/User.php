<?php

header('Content-Type: text/html; charset=utf-8');

class User
{
    private $name;
    private $lastname;
    private $email;
    private $id;

    function __construct($id, $name, $lastname, $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
    }

    function getId()
    {
        return $this->id;
    }
    function getName()
    {
        return $this->name;
    }
    function getLastname()
    {
        return $this->lastname;
    }
    function getEmail()
    {
        return $this->email;
    }

    // Статический метод добавления пользователя
    static function addUser($name, $lastname, $email, $pass)
    {
        //echo  "User added.";
        global $mysqli;
        // var_dump($mysqli);
        $email = trim(mb_strtolower($email));
        $pass = trim($pass);
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $result = $mysqli->query(("SELECT * FROM `users` WHERE `email` = '$email' "));

        // Формат JSON (ключ: значение)
        if ($result->num_rows != 0) return json_encode(["result" => "exist"]);
        $mysqli->query("INSERT INTO `users`(`name`, `lastname`, `email`, `pass`) VALUES ('$name', '$lastname', '$email', '$pass')");
        return json_encode(["result" => "success"]);
    }

    // Статический метод авторизации пользователя
    static function authUser($email, $pass)
    {
        global $mysqli;
        $email = trim(mb_strtolower($email));
        $pass = trim($pass);

        $result = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email' ");
        $result = $result->fetch_assoc();

        if (password_verify($pass, $result["pass"])) {
            $_SESSION["id"] = $result["id"];
            return json_encode(["result" => "authorized"]);
        } else {
            return json_encode(["result" => "rejected"]);
        }
    }

    // Статический метод информация о пользователе
    static function getUser($userID)
    {
        global $mysqli;
        $result = $mysqli->query("SELECT `name`, `lastname`, `email`, `id` FROM `users` WHERE `id` = '$userID' ");
        $result = $result->fetch_assoc();
        // var_dump(json_encode($result["name"]));
        return json_encode($result);
    }
    
}
