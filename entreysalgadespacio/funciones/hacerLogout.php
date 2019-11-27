<?php
session_start();
$_SESSION=null;
session_destroy();
header("Location: /entreysalgadespacio/index.php");
?>