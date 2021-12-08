<?php
///database connection 
    include 'pdo.php';

    if(isset($_POST["submit"])){
        $password = $_POST["pass"];
        $username = $_POST["uname"];

        $userquery= "select * from patient where username='$username' AND password='$password' ";
        $returnvalue=$conn->prepare($userquery);
        $returnvalue->execute();
        $rowcount = $returnvalue->rowCount();

        if($rowcount==1){
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['user']=$username;
            echo '<script>
            window.location.href="table1.php";
            </script>';
            
        }
        else{
            echo '<script>
            window.location.href="login.php";
            </script>';
        }
    }
	
//new function
?>
