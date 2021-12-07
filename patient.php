<?php
    if(isset($_SESSION)){
        session_destroy();
    }
    include "pdo.php";

    if(isset($_POST["submit"])){
        if(isset($_POST['password'])){
                    $name = $_POST["name"];
        $password = $_POST["password"];
        $username = $_POST["username"];
        $contact = $_POST["contact"];
        $blood_group = $_POST["blood_group"];
        $weight = $_POST["weight"];

        }
    }
?>