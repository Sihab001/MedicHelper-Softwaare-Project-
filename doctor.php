<?php
include "pdo.php";
$name = $_POST["name"];
        $category = $_POST["category"];
	    $shedule = $_POST["shedule"];
        $contact = $_POST["fee"];
        $location = $_POST["location"];
        $fee = $_POST['fee'];
        $time= $_POST['time'];
        
        $userquery= "insert into doctor(`Name`, `d_id`, `Category`, `Shedule`, `Fee`, `location`, `time`) 
                                values('$name','', '$category','$shedule','$fee','$location','$time')";
            //echo $userquery;
        
        $returnvalue = $conn->prepare($userquery);
        
        $result = $returnvalue->execute();
        
        if($result){
            echo "Successfully registered";
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

    <form action="" method ="post" >

    <table>
        <tr>
            <th></th>
            <th><h2>Doctor Info</h2></th>
        </tr>
        <tr>
            <td>Name:</td>
            <td><input autocomplete="off" type ="text" name ="name"></td>
        </tr>
        <tr>
            <td> Category:</td>
            <td><input autocomplete="off" type ="text" name ="category"></td>
        </tr>
	<tr>
            <td> Shedule:</td>
            <td><input autocomplete="off" type ="date" name ="shedule"></td>
        </tr>
        <tr>
            <td> Time: </td>
            <td><input autocomplete="off" type ="text" name ="time" placeholder="time"></td>
        </tr>
        <tr>
            <td>Fee:</td>
            <td><input autocomplete="off" type ="text" name ="fee"></td>
        </tr>
        <tr>
            <td> Location:</td>
            <td><input autocomplete="off" type ="text" name ="location"></td>
        </tr>
        <tr>
            <td> Category:</td>
            <td><?php include "drop.php";?>   </td>
        </tr>

    </table> </form>
    <button style="width:200px;">Done</button>
    <button style="width:200px;">Check Status</button>
 </body>
</html>