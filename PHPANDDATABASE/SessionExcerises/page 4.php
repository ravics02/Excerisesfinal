<?php

//start a session
@session_start();
//get session value
$address = $_SESSION ["address"];
echo "address:".$address;
