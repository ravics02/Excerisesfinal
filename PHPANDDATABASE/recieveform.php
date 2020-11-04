<?php

//This is the php for the My company portal [The file name for lei :login.php]
$username =$_GET["username"];// in side the square brackets, should be the name of the input box
$Password =$_GET["Password"];//  the name od the input box



echo "Username:".$username;
echo "<br> Password:".$Password;
// Create a database connection
$server ="lolyz0ok3stvj6f0.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbusername = "zwtccshi5x8h5pvx";
$dbpassword = "j6idgpckpu4s42xh";
$dbname = "j70b2olzmcxne6ap";

$conn = new mysqli($server,$dbusername,$dbpassword,$dbname);

if ($conn-> error) {
    echo $conn->error;
}else {
    echo "Connected";
}

// create a query

$sql= "select * from user where username = ".$username." and password = ".$Password;

// run my query

$result = mysqli_query($conn,$sql);

// show my result

if ($result->num_rows == 1) {
     echo "You have signed in";
    while ($row = $result->fetch_assoc()){
        echo $row ["firstname"];


}






}

