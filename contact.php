
<?php

$servername = "localhost";

$username = "root";

$password = "";

$database = "Loginform";

$conn = new mysqli($servername, 

           $username, $password, $database);
           
           
        

if ($conn->connect_error) {

    echo("Connection failed: "

      . $conn->connect_error);
}

    echo "Connected successfully";
     
     
   $pname=$_POST['pname'];
   $gmail=$_POST['gmail'];
   $pnum=$_POST['pnum'];
    
    
    
$sql = "INSERT INTO Webdata (PNAME,GMAIL,PNUM)
VALUES ('$pname','$gmail','$pnum')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
