<?php
require "../Rest-Api/token.php";
session_start();
$_SESSION['session'] = '';
unset($_SESSION['session']);
session_unset();
session_destroy();
header("Location: ../../../zkprot?alert=session_destroy&&auth=0x1$auth");
?>