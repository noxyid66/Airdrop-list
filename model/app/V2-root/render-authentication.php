<?php

session_start();

require "../configuration/config-authentication.php";

if (isset($_POST['root'])) {
    $pin = trim($_POST["pin"]);
    $auth = trim($_POST["auth"]);
    $authentication = substr($auth, 0, 2);
    $sql = mysqli_query($db, "select * from authentication");
    while ($lock = mysqli_fetch_array($sql)) {
        $cek_auth = $lock['auth'];
        $cek_pin = $lock['pin'];
    }

    $sub_auth = $cek_auth;

    $sesion_auth = substr($sub_auth, 0, 2);

    if ($sesion_auth == $authentication) {
        if ($cek_pin == $pin) {
            $_SESSION['session'] = "true";
            header("location: ../../../root?auth=$auth");
        } else {
            header("location: ../../../zkprot?alert=pin_notfound&&auth=$auth");
        }
    } else {
        header("location: ../../../zkprot?alert=auth_notfound&&=$auth");
    }
}
?>