<?php


if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // create a database connection

    $server = "lolyz0ok3stvj6f0.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $dbusername = "zwtccshi5x8h5pvx";
    $dbpassword = "j6idgpckpu4s42xh";
    $dbname = "j70b2olzmcxne6ap";
    $conn = new mysqli($server, $dbusername, $dbpassword, $dbname);


    // create a query

    $sql = "select * from users;
    where username = '$username' and
    $password = '$password'";

    //run the query

    $result = mysqli_query($conn, $sql);

    //show results

    if ($result->num_rows == 1) {
        echo "you have login";
        while ($row = $result->fetch_assoc()) {
            echo $row["firstname"];
            //start session
            @session_start();
            $_SESSION["userID"]= $row["id"];
            $_SESSION["firstname"] = $row["firstname"];
        }
    } else {
        echo "wrong username or password";

    }
    }
?>
<?php
if (!isset($_SESSION["UserID"])){

?>

<form action="<?php $_SERVER["PHP_SELF"]; ?> " METHOD="post">
    <input name="username" type="text" placeholder="username">
    <input name="password" type="text" placeholder="password">
    <input type="submit" value="post">

</form>

<?php

} else{

    ?>
    <a href="logout.php">Logout"</a>

    <?php

}


?>
