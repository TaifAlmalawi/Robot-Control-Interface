<?php 
$servername = "localhost";
 $username = "root"; 
 $password = "";
 $dbname = "robot_control";

$conn = new mysqli($servername, $username, $password, $dbname); 

if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error);
     } 

     if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $direction = $_POST["direction"];
         $sql = "INSERT INTO movements (direction) VALUES ('$direction')";
         
         if ($conn->query($sql) === TRUE) {
             echo "Movement recorded successfully";
              } else { 
                echo "Error: " . $sql . "<br>" . $conn->error; 
                } 
            } 
            
            $conn->close(); 
            ?>
