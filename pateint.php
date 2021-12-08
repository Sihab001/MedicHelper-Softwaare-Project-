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

<html>
<head>
    
<title>insert from data in mysql database using php</title>
    
</head>
<body style="background-color:cadetblue; align-items: center;display: flex;
justify-content:space-between;
flex-direction: column;
align-items: center;
">

    <form action="" method ="post">

    <table>
        <tr>
            <th></th>
            <th><h2>For New Patient Registration</h2></th>
        </tr>
        <tr>
            <td>Name:</td>
            <td><input autocomplete="off" type ="text" name ="name"></td>
        </tr>
        <tr>
            <td> User Name:</td>
            <td><input autocomplete="off" type ="text" name ="username"></td>
        </tr>
        <tr>
            <td>Mobile Number:</td>
            <td><input autocomplete="off" type ="text" name ="contact"></td>
        </tr>
        <tr>
            <td> Bloodgroup:</td>
            <td><input autocomplete="off" type ="text" name ="blood_group"></td>
        </tr>
        <tr>
            <td> Weight:</td>
            <td><input autocomplete="off" type ="number" name ="weight"></td>
        </tr>
	
       

    
       
 </table> </form>
 <button style="width:200px;">Done</button>
 <button style="width:200px;">Check Status</button>
 </body>
</html>