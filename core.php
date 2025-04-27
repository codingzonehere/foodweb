<?php
//Created by Tanvir Ahmed

    @$Yourname = $_POST['yourname'];
    @$YourNum = $_POST['Ynum'];
    @$foodName = $_POST['fname'];
    @$AddFName = $_POST['Afood'];
    @$HowMuch = $_POST['Hmuch'];
    @$LTime = $_POST['Ltime'];
    @$YourAdr = $_POST['YAdress'];
    @$YourMessg = $_POST['YourMessg'];

    $servername = "localhost";
    $username = "";
    $password = "";
    $dbname = "orderinfo";

// DB connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO oderdetails (ID, YourName, YourNumber, YourOrder, AdditionalFood, HowMuch, DateAndTime, YourAddress, YourMessage) VALUES ('', '$Yourname', '$YourNum', '$foodName', '$AddFName', '$HowMuch', '$LTime', '$YourAdr', '$YourMessg')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>
