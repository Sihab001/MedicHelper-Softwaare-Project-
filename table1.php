<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
        <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
        <style>
            table, th, td {

                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>

    </head>
    <body>
        <h1>Patient's page</h1>

        <?php
        if(!isset($_SESSION))
        {
            session_start();
        }
        //echo $_SESSION['user'];
        $username=$_SESSION['user'];
        //echo $username;
        $servername = "localhost";
        $username1 = "root";
        $password1 = "";
        $dbname = "medichelper";
        // Create connection
        $conn2 = new mysqli($servername, $username1, $password1, $dbname);
        // Check connection
        if ($conn2->connect_error) {
            die("Connection failed: " . $conn2->connect_error);
        }





        $sql = "SELECT  `Name`, `p_id`, `Contact`, `Weight`, `Blood_Group`, `username`, `bookingb_id` FROM `patient` WHERE  username='$username' ";
        //echo $sql;
        $result = $conn2->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            echo "<table class='ui celled table'><tr><th>ID</th><th>Name</th><th>Username</th><th>Contact</th><th>Blood Group</th><th>Weight</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>
        <td>".$row["p_id"]."</td>
        <td>".$row["Name"]."</td>
        <td>".$row["username"]."</td>
        <td>".$row["Contact"]."</td>
        <td>".$row["Blood_Group"]."</td>
        <td>".$row["Weight"]."</td>
        </tr>";
                $_SESSION['pid']=$row["p_id"];

            }
        } else {
            echo "0 results";
        }

        ?>
        <br>
        <form action='logout.php'>
            <button class="ui primary button" type="submit" name="Logout"  value="Logout">Logout</button>
        </form>


        <form action="table1.php" method="GET">
            <label for="appointment">Appointment date: </label>
            <input type="date" id="date" name="date">
            
            Name :<select name="categories">
            <option value="heart">Heart</option>
            <option value="eye">Eye</option>
            <option value="ear">Ear</option>
            <option value="orthopedics">Orthopedics</option>
            </select>
            <input class="ui primary button" type="submit" name="submit" value="Insert">
        </form>

        <?php
        if(isset($_GET['categories']) && isset($_GET['date']))
        {
            $category=$_GET['categories'];
            $date_time=$_GET['date'];

            $ins=mysqli_query($conn2,"INSERT INTO `booking` 
                          (name,date)
                          VALUES ('$category','$date_time')") or die(mysql_error());
            if($ins)
            {
                echo "<br>".$category." inserted";
                echo "<br>".$username;
            }

        }

        ?>



    </body>

</html>