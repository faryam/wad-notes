<?php
session_start();

echo "you are logged out";

session_unset();
session_destroy();

setcookie("country","",time()-100);

?>