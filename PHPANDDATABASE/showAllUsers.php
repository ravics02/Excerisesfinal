<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show all users</title>
</head>
<body>
<table>
    <tr>
        <th>ID </th>
        <th>First Name</th>
        <th>Last name</th>
        <th>Username</th>
        <th>Password</th>
        <th>Address</th>
        <th>Phone number</th>


    </tr>
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
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["Firstname"]."</td>";
        echo "<td>".$row["lastname"]."</td>";
        echo "<td>".$row["username"]."</td>";
        echo "<td>".$row["password"]."</td>";
        echo "<td>".$row["address"]."</td>";
        echo "<td>".$row["phonenumber"]."</td>";
        echo "</tr>";


    }
    ?>
</table>
</body>
</html>