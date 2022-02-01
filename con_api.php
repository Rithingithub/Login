<?php

//if(isset($_GET['google'])) {

    $url = $_GET['url'];
    $ip = $_SERVER['REMOTE_ADDR'];
    
    $servername = "localhost";
    $username = "id18336031_rithinbrowser";
    $password = "Thekhil$#2022";
    $dbname = "id18336031_rithinbrow";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO urls (url, ip)
        VALUES ('$url', '$ip')";

    if ($conn->query($sql) === TRUE) {
    echo "<h1><center> Entered succesfully! </h1></center> ";
    echo "<center><h2> Decrypt this : </h2> Vmtkb2NHTjVRbkJqZVVKcVkyMUdhbUV5Vm10SlNHeDJaRk5DYUdOdFZXZGFNamwyV2tFOVBRPT0=</center> ";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
// }
?>
