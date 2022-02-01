<?php

$servername = "localhost";
$username = "id18336031_rithinlogin";
$password = "Thekhil456##";
$dbname = "id18336031_login";        
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['user'])){
    
    $uname=$_POST['user'];
    $password=$_POST['pass'];
    
    $sql="select * from loginform where user='".$uname."'AND pass='".$password."' ";
    
    $result=mysqli_query($conn , $sql);
    
    if(mysqli_num_rows($result)){
        echo header("Location: con_api.php", true, 301);
exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
    }
        
}
?>
