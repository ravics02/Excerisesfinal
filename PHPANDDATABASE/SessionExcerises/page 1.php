<?php

//start a session
@session_start();
//get session value
$username = $_SESSION ["username"];
echo "username:".$username;
?>;