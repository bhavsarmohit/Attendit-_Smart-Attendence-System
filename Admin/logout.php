<?php
session_start();
unset($_SESSION["username"]);
header("Location:/attendit/index.php");
?>