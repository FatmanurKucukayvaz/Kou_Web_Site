<?php
session_start();

session_destroy();

header("location:acilirMenu.php");
?>