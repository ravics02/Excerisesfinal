<?php
// Create a database connection
$server ="lolyz0ok3stvj6f0.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbusername = "zwtccshi5x8h5pvx";
$dbpassword = "j6idgpckpu4s42xh";
$dbname = "j70b2olzmcxne6ap";

$conn = new mysqli($server,$dbusername,$dbpassword,$dbname);

if ($conn-> error) {
    echo $conn->error;
}else{
    echo "Connected";


}

// write a query
$sql = "select * from users";

// execute the query
$result = mysqli_query($conn,$sql);

//show my result

while ($row = $result->fetch_assoc()){
    echo $row ["id"];

}