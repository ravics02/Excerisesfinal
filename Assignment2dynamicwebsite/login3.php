<?php
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
}

echo "Username:" . $username;
echo "Password:" . $password;

//created a database connection
$server = "lolyz0ok3stvj6f0.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbusername = "zwtccshi5x8h5pvx";
$dbpassword = "j6idgpckpu4s42xh";
$dbname = "j70b2olzmcxne6ap";
$conn = new mysqli($server, $dbusername, $dbpassword, $dbname);

$conn = new mysqli($server, $dbusername, $dbpassword, $dbname);

if ($conn->error) {
    echo $conn->error;
} else {
    echo "Connected";
}

//create a query
$sql = " SELECT * FROM `users` 
where username = '" . $username . "' and password = '" . $password."'";

echo
//run my query
$result = mysqli_query($conn, $sql);

//show result
if ($result->num_rows == 1) {
    echo "you have login";
    while ($row = $result->fetch_assoc()) {
        echo $row["firstname"];
    }
} else {
    echo "wrong username or password";
}

if (!isset($_SESSION["userID"])) {
    ?>
    <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
        <input name="username" type="text" placeholder="Username">
        <input name="password" type="password" placeholder="Password">
        <input type="submit" value="Post">
    </form>
    <?php
}else{

    echo '<a href="logout.php">logout</a>';

}
?>
}