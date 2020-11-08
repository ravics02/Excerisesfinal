<?php

//start a session
@session_start();
//get session value
//$message = $_SESSION ["message"];
//echo "message:".$message;
$firstname = $_SESSION ["firstname"];
echo "User's Firstname:".$firstname;
