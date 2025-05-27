<?php
session_start();

require "../../../model/app/Rest-Api/token.php";
require "../../../model/app/Rest-Api/access-danied.php";

if ($_SESSION['session'] != "true") {
    header("location: ../zkprot?alert=bad_request&&auth=0x1$auth");
    exit();
}
$timeout = 600;
if (isset($_SESSION['start_time'])) {
    $elapsed_time = time() - $_SESSION['start_time'];
    if ($elapsed_time >= $timeout) {
        session_destroy();
        header("location:../zkprot?alert=session_destroy&&auth=0x1$auth", true, 301);
    }
}
$_SESSION['start_time'] = time();
?>
<html>
<head>
    <title>root</title>
    <meta charset="utf-8" />
    <meta name="description" content="root" />
    <link rel="stylesheet" href="../../../model/library/stylesheet/root-style.css" />
    <link rel="icon" type="jpg" href="../../../model/library/assets/auth.jpeg" />
</head>
<body>
    <div class="container">
        <div id="boxes">
            <h1>delete success</h1>
            <a onclick="pop()">ok</a>
        </div>
        <div class="metadata">
            <div class="artikel">
                <a href="../../../model/app/V2-root/render-logout.php"><i>logout</i></a>
                <a link href="create?auth=<?php require "../../../model/app/Rest-Api/token.php"; echo "0x$auth"; ?>">create</a>
            </div>
            <div class="search">
                <form action="index.php" method="get">
                    <input type="text" name="cari" placeholder="search">
                    <button type="submit" value="Cari">cari</button>
                </form>
            </div>
            <div class="content">
                <table border="1">
                    <tr>
                        <th>Airdrop</th>
                        <th>Fund Raised</th>
                        <th>Type</th>
                        <th>Roadmap</th>
                        <th>Source</th>
                        <th>Post</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <?php

                    require "../../../model/app/configuration/airdrop.php";

                    if (isset($_GET['auth'])) {
                        $cari = addslashes($_GET['cari']);
                        $query = mysqli_query($db, "SELECT * FROM list WHERE token like '%".$cari."%' OR id like '%".$cari."%' OR airdrop like '%".$cari."%' OR funding like '%".$cari."%' OR type like '%".$cari."%' OR roadmap like '%".$cari."%'");
                    } else {
                        $query = mysqli_query($db, "SELECT * FROM list ORDER BY id, airdrop ASC");
                    }
                    while ($hasil = mysqli_fetch_array($query)) {
                        echo "<div class='result'>";
                        echo "<tr>";
                        echo "<td>" . htmlentities($hasil['airdrop']) . "</td>";
                        echo "<td>" . htmlentities($hasil['funding']) . "</td>";
                        echo "<td>" . htmlentities($hasil['type']) . "</td>";
                        echo "<td>" . htmlentities($hasil['roadmap']) . "</td>";
                        echo "<td>" . htmlentities($hasil['source']) . "</td>";
                        echo "<td>" . htmlentities($hasil['realtime']) . "</td>";
                        echo "<td><a link href='update?hash=".$hasil['hash']."&token=".$hasil['token']."'>edit</a></td>";
                        echo "<td><a link href='../../../model/app/V2-protocol/delete-list.php?hash=".$hasil['hash']."&token=".$hasil['token']."' onclick='pop()'>delete</a></td>";
                        echo "</tr>";
                        echo "</div>";
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <?php if ($_SESSION['delete']) {
        ?>
        <script>
            setTimeout(() => {
                document.getElementById("boxes").style.display = "block";
                t = 1;
            }, 100);
            setTimeout(() => {
                document.getElementById("boxes").style.display = "none";
                t = 0;
            }, 10000);
            var t = 0;
            function pop() {
                if (t != 0) {
                    document.getElementById("boxes").style.display = "none";
                    t = 0;
                }
            }

        </script>
        <?php unset($_SESSION['delete']);
    }
    ?>
</body>
</html>