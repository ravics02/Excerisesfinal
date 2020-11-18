<?php
$server ="lolyz0ok3stvj6f0.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbusername = "zwtccshi5x8h5pvx";
$dbpassword = "j6idgpckpu4s42xh";
$dbname = "j70b2olzmcxne6ap";

$conn = new mysqli($server,$dbusername,$dbpassword,$dbname);

$conn= createDatabaseConnection();

$sql ="select * from orders where userID= $USERID";

$result = mysqli_query($conn,$sql);
while ($row = $result->fetch_assoc()){

    echo "<h3>Order Number:".$row["orderNum]""</h3>";
     echo "<h3>shipping address:".$row["ShippAddress]""</h3>";
     echo "<h3>Time:".$row["orderdate]""</h3>";



     // second query
    $sql2 = "select* from orderProducts where orderID =".$row["orderNum"];

// run the second query

    $result2= mysqli_query($conn,$sql2);
    while ($row2=$result2->fetch_assoc()){
        echo "<p> ID:".$row2["productid"]."Oty: ".$row2["qty"]."</p>";
    }

}
