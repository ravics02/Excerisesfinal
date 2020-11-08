<?php
// Start a session
@session_start();
//set value to session variables
$_SESSION["username"] = "Lei";
$_SESSION ["password"] = "Song";
$_SESSION ["color"] ="red";
$_SESSION ["address"] = "139 Carrington road";

if (isset($_POST["Message"])) {
    echo "<p>I have a post message in this page</p>";
}else{
    echo "<p>Please post a message to me </p>";


}

?>

<html>

<head>

    <title> Session Exercise </title>

</head>


<body>

<ul>
    <li><a> href="page1.php"> Page 1 </a></li>
    <li><a> href="page2.php"> Page 2 </a></li>
    <li><a> href="page3.php"> Page 3 </a></li>
    <li><a> href="page4.php"> Page 4 </a></li>
    <li><a> href="page5.php"> Page 5 </a></li>


</ul>

<form action="<?php $_SERVER["PHP_SELF"]; ?> "METHOD="post">
    <INPUT name="message"type="text" placeholder="message here">
    <input name="submit"value="post">



</form>

</body>
</html>
