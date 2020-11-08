<?php

//start a session
@session_start();
//get session value
$password = $_SESSION ["password"];
echo "password:".$password;
