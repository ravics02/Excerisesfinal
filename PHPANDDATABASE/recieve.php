<?php
$username =$_GET["username"];// in side the square brackets, should be the name of the input box
$Password =$_GET["Password"];//  the name od the input box
$number = $_GET["mynumber"];// the number
$color = $_GET["mycolor"];// the color
$select =$_GET["mySelect"];// the select color box

echo "Username:".$username;
echo "<br> Password:".$Password;
echo"<br> Number:".$number;
echo"<br>color:".$color;
echo"<br> selection".$select;

