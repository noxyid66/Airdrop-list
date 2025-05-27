<?php

require "../configuration/airdrop.php";
require "../Rest-Api/token.php";


if (isset($_POST['update'])) {
    $hash = addslashes(trim($_POST['hash']));
    $id = addslashes(trim($_POST['id']));
    $token = addslashes(trim($_POST['token']));
    $airdrop = addslashes(trim($_POST['airdrop']));
    $funding = addslashes(trim($_POST['funding']));
    $type = addslashes(trim($_POST['type']));
    $roadmap = addslashes(trim($_POST['roadmap']));
    $running = addslashes(trim($_POST['running']));
    $task = addslashes(trim($_POST['task']));
    $linkreff = $_POST['linkreff'];
    $tutorial = $_POST['tutorial'];
    $note = addslashes(trim($_POST['note']));
    $source = addslashes(trim($_POST['source']));
    $realtime = addslashes(trim($_POST['realtime']));

    $sql = "UPDATE list SET hash='$hash', id='$id', token='$token', airdrop='$airdrop', funding='$funding', type='$type', roadmap='$roadmap', running='$running', task='$task', linkreff='$linkreff', tutorial='$tutorial', note='$note', source='$source', realtime='$realtime' WHERE hash=$hash";
    $query = mysqli_query($db, $sql);
    if (!$query) {
        header("location: ../../../update?alert=bad&auth=0x$auth", true, 301);
    } else {
        header("location: ../../../update?alert=success&auth=0x$auth", true, 301);
    }
}
?>