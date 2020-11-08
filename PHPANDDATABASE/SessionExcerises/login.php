<?php
$username = $_POST["username"];
$password = $_POST["password"];

echo "Username:" . $username;
echo "Password:" . $password;

//create a database connection
$server = "lolyz0ok3stvj6f0.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbusername = " zwtccshi5x8h5pvx";
$dbpassword = " j6idgpckpu4s42xh";
$dbname = " j70b2olzmcxne6ap";

$conn = new mysqli($server, $dbusername, $dbpassword, $dbname);

if ($conn->error) {
    echo $conn->error;
} else {
    echo "Connected";
}

//create a query
$sql = "select * from users 
where username = '" . $username . "' and password = '" . $password."'";
echo $sql;
//run my query
$result = mysqli_query($conn, $sql);

//show result
if ($result->num_rows == 1) {
    echo "you have login";
    while ($row = $result->fetch_assoc()) {
        echo $row["firstname"];
        @session_start();
        $_SESSION["firstname"] = $row["firstname"];
    }
} else {
    echo "wrong username or password";
}