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
        
        $userquery= "insert into patient(`Name`, `p_id`, `Age`, `Contact`, `Weight`, `Blood_Group`, `username`, `password`, `bookingb_id`)
                                values('$name','','','$contact','$weight','$blood_group', '$username','$password','')";
            //echo $userquery;
        $returnvalue = $conn->prepare($userquery);
        
        $result = $returnvalue->execute();
        
        if($result){
            echo "Successfully registered";
        }
        }
    }
?>