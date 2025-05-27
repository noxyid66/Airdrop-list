<?php

require "../configuration/airdrop.php";
require "../Rest-Api/token.php";


if (isset($_POST['create'])) {
    $id = addslashes(trim($_POST['id']));
    $token = addslashes(trim($_POST['token']));
    $airdrop = addslashes(trim($_POST['airdrop']));
    $funding = addslashes(trim($_POST['funding']));
    $type = addslashes(trim($_POST['type']));
    $roadmap = addslashes(trim($_POST['roadmap']));
    $running = addslashes(trim($_POST['running']));
    $task = addslashes(trim($_POST['task']));
    $linkreff = $_POST['linkreff'];
    $tutorial = addslashes(trim($_POST['tutorial']));
    $note = addslashes(trim($_POST['note']));
    $source = addslashes(trim($_POST['source']));
    $realtime = addslashes(trim($_POST['realtime']));

    $sql = "INSERT INTO list (id, token, airdrop, funding, type, roadmap, running, task, linkreff, tutorial, note, source, realtime) VALUE ('$id', '$token', '$airdrop', '$funding', '$type', '$roadmap', '$running', '$task', '$linkreff', '$tutorial', '$note', '$source', '$realtime')";
    $query = mysqli_query($db, $sql);
    if (!$query) {
        header("location: ../../../create?alert=bad&auth=0x$auth", true, 301);
    } else {
        header("location: ../../../create?alert=success&auth=0x$auth", true, 301);
    }
}
?>