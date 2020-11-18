<?php

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$password = $_POST["password"];
$address = $_POST["address"];
$phone = $_POST["phone"];
if ($firstname == "" || $lastname == "") {
    //1. connect to database
    $server = "lolyz0ok3stvj6f0.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $dbusername = "zwtccshi5x8h5pvx";
    $dbpassword = "j6idgpckpu4s42xh";
    $dbname = "j70b2olzmcxne6ap";
    $conn = new mysqli($server, $dbusername, $dbpassword, $dbname);

    $conn = new mysqli($server, $dbusername, $dbpassword, $dbname);

//2. create a query
    $sql = "INSERT INTO `users`(`id`, `firstname`, `lastname`, `username`, `password`, `address`, `phoneNumber`) 
VALUES (NULL,'$firstname','$lastname','$username','$password','$address','$phone')";

//3. run the query
    if (mysqli_query($conn, $sql)) {
        echo "data has been inserted";
    } else {
        echo "data has not been inserted";
    }
} else {
    echo "there should not be empty input";
}


echo "<a href='registerationform.php'>Home</a>";