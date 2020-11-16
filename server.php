<?php

$db_host = "localhost";
$db_name = "trialdb";
$db_user = "root";
$db_pass = "";
#$_POST = $_POST;

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(isset($_POST["btn-signup"])){
     $fname = $_POST["first_name"];
     $lname = $_POST["last_name"];
     $email = $_POST["email"];
     $phone = $_POST["phone_number"];
     $password = $_POST["password"];
     $hashpassword = sha1($password);

     
    $sql = "INSERT INTO trials (first_name, last_name, email, phone_number, password) VALUES ('$fname', '$lname', '$email', '$phone', '$hashpassword')";
      // use exec() because no results are returned
    //die($sql);

    $res = mysqli_query($conn, $sql);
     #$conn->exec($sql);
     echo "Record created successfully";
}

?>