<?php
$server ="lolyz0ok3stvj6f0.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbusername = "zwtccshi5x8h5pvx";
$dbpassword = "j6idgpckpu4s42xh";
$dbname = "j70b2olzmcxne6ap";

$conn = new mysqli($server,$dbusername,$dbpassword,$dbname);


$sql = "select * from product";

$result = mysqli_query($conn,$sql);

while ($row = $result->fetch_assoc()) {

    echo $row["id"];
    echo $row["productName"];
}

