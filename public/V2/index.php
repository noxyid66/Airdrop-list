<!DOCTYPE html>
<html>
<head>
    <title>authentication</title>
    <meta charset="utf-8" />
    <meta name="description" content="authentication" />
    <meta name="viewport" content="width=device-width, maximum-scale=1, user-scalable=yes" />
    <link rel="stylesheet" href="../../model/library/stylesheet/v2-style.css" />
    <link rel="icon" type="jpg" href="../../model/library/assets/root.jpg" />
</head>
<body>
    <?php
    if (isset($_GET['alert'])) {
        if ($_GET['alert'] == "pin_notfound") {
            echo '<div class="alert"><span class="closebtn">&times;</span>access danied</div>';
            require "../../model/app/Rest-Api/access-danied.php";
        } else if ($_GET['alert'] == "auth_notfound") {
            echo '<div class="alert"><span class="closebtn">&times;</span>proot auth failed</div>';
            require "../../model/app/Rest-Api/access-notauthorize.php";
        } else if ($_GET['alert'] == "bad_request") {
            echo '<div class="alert"><span class="closebtn">&times;</span>bad request</div>';
            require "../../model/app/Rest-Api/access-bad.php";
        } else if ($_GET['alert'] == "session_destroy") {
            echo '<div class="alert"><span class="closebtn">&times;</span>session_destroy</div>';
            require "../../model/app/Rest-Api/access-destroy.php";
        } else if ($_GET['alert'] == "render-authentication") {
            require "../../model/app/Rest-Api/access-auth.php";
        } else if ($_GET['alert'] == "") {
            header("location: ../index.php", true, 301);
        }
    }
    ?>
    <div class="container">
        <div class="main">
            <form action="../../model/app/V2-root/render-authentication.php" method="post">
                <input type="hidden" name="auth" id="token" value="0x1<?php $permitted_chars = '01234567890987654321abcdefghijk9876543210123456789lmnopqrstuvwxyz1234567890987654321ABCDEFGHIJK012345678901234567890LMNOPQRSTUVWQXYZ098765432109876543210'; echo substr(str_shuffle($permitted_chars), 0, 200); ?>">
                <input type="number" name="pin" value="" required="" />
                <div class="strat-authentication" id="auth">
                    <input type="hidden" name="root">
                </div>
            </form>
        </div>
    </div>
    <div class="footer">
        V2.0x1 <del>ZK protocol 〢</del>
    </div>
    <script>
        var close = document.getElementsByClassName("closebtn");
        var i;

        for (i = 0; i < close.length; i++) {
            close[i].onclick = function() {
                var div = this.parentElement;
                div.style.opacity = "0";
                setTimeout(function() {
                    div.style.display = "none";
                }, 2000);
            }
        }
    </script>
</body>
</html>