<?php
session_start();
ob_start();
session_destroy();
header("Refresh: 1; url=index.php");

?>