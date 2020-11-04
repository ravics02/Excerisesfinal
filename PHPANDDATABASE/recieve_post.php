<?php
$username =$_POST["username"];// in side the square brackets, should be the name of the input box
$Password =$_POST["Password"];//  the name od the input box
$number = $_POST["mynumber"];// the number
$color = $_POST["mycolor"];// the color
$select =$_POST["mySelect"];// the select color box

echo "Username:".$username;
echo "<br> Password:".$Password;
echo"<br> Number:".$number;
echo"<br>color:".$color;
echo"<br> selection".$select;

