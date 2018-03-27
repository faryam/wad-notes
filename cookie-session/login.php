<?php

session_start();
$_SESSION["user"] = "Ali";
setcookie("country","pakistan",time()+60*60*24*30 );

?>