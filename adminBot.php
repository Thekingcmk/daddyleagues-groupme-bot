<?php

// the admin bot setup

include('./httpful.phar');
include('./functions.php');

// this is found at http://dev.groupme.com/bots
$bot_token = "71b2c6a5049af552945da6fe88";

// adds admin commands 
$isAdmin = TRUE;
include('adminFunctions.php');

include('./index.php');

?>
