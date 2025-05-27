<?php

require "../configuration/airdrop.php";

$save = addslashes(trim($_POST["save"]));
$CreateFile = "$save";

$separator = "\t";

header("Content-type: text/plain");
header("Content-Disposition: attachment; filename=".htmlentities($CreateFile));
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Access-Control-Request-Headers, Authorization");
header("Content-Type: application/json");

if (isset($_GET['hash'])) {
    $hash = $_GET['hash'];
    $query = "SELECT * FROM list WHERE hash='$hash'";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_assoc($result);

    $data = array(
        'Token' => $row['token'],
        'Airdrop' => $row['airdrop'],
        'Funding' => $row['funding'],
        'Type' => $row['type'],
        'Roadmap' => $row['roadmap'],
        'Running' => $row['running'],
        'Task' => $row['task'],
        'Link/Reff' => $row['linkreff'],
        'Note' => $row['note'],
        'Source' => $row['source'],
        'Last update' => $row['realtime'],

    );

    $hasil[] = $data;

    echo json_encode($hasil, JSON_PRETTY_PRINT);

} else {

    $query = "SELECT * FROM list ORDER BY hash DESC";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_assoc($result);

    do {
        $hasil[] = $row;
    } while ($row = mysqli_fetch_assoc($result));

    echo json_encode($hasil, JSON_PRETTY_PRINT);
}

?>