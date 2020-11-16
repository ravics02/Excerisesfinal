<?php
$firstname=$_POST["Firstname"];
$lastname=$_POST["Lastname"];
$Username=$_POST["Username"];
$password=$_POST["Password"];
$address= $_POST["address"];
$phone=$_POST["phone"];

// connect to database
$server ="lolyz0ok3stvj6f0.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbusername = "zwtccshi5x8h5pvx";
$dbpassword = "j6idgpckpu4s42xh";
$dbname = "j70b2olzmcxne6ap";

$conn = new mysqli($server,$dbusername,$dbpassword,$dbname);

// create a query

$sql ="INSERT INTO `users`(`id`, `firstname`, `lastname`, `username`, `password`, `address`, `phonenumber`) 
VALUES (null,'$firstname','$lastname','$Username','$password','$address','$phone')";

// run the query

if (mysqli_query($conn,$sql)){

echo "data has been inserted";

}else{
    echo "data has not been inserted";


}
echo "<a href='index.php'>Home</a>";

