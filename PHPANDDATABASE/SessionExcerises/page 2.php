<?php

//start a session
@session_start();
//get session value
$message = $_SESSION ["message"];
echo "message:".$message;

