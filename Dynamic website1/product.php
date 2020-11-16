<?php

//
$server ="lolyz0ok3stvj6f0.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbusername = "zwtccshi5x8h5pvx";
$dbpassword = "j6idgpckpu4s42xh";
$dbname = "j70b2olzmcxne6ap";

$conn = new mysqli($server,$dbusername,$dbpassword,$dbname);

if (isset($_GET["category"])){
    echo "<h1>".$_GET["category"]."</h1>";
}


$sql = "select * from product where category=1";

$result = mysqli_query($conn,$sql);

while ($row = $result->fetch_assoc()) {
    ?>

    <form action="<?php $_SERVER["PHP_SELF"]; ?> " METHOD="post">
        <input name="username" type="text" placeholder="username">
        <input name="password" type="text" placeholder="password">
        <input type="submit" value="post">

    </form>




<div>
<p><?php echo $row["name"]; ?></p>
<p><?php echo $row["price"]; ?></p>
<p><img src="<?php echo $row["image"];?></p>
<form action="..." method="post">

    <input name="ProductID" value="<?php echo $row["id"]; ?>" type="hidden">

    <input name="qty" type="number" placeholder="QTY">

</div>




<?php
}

