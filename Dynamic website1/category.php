<?php
//1. connect to the database

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
    // 2. Create a query

    $sql = "select * from category";

// 3. run the query on that connection

    $result = mysqli_query($conn, $sql);

//4. show result

    while ($row = $result->fetch_assoc()) {
        ?>
        <li><a href="index.php"> <?php echo $row["name"]; ?></a></li>
<?php



    }



