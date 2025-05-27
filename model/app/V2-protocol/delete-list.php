<?php

require "../configuration/airdrop.php";
require "../Rest-Api/token.php";

$hash = $_GET['hash'];

session_start();

$sql = "DELETE FROM list WHERE hash=$hash";
$query = mysqli_query($db, $sql);

$_SESSION["delete"] = 'delete';
header("location: ../../../root?alert=delete&auth=0x$auth", true, 301);

?>