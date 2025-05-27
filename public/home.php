<!DOCTYPE html>
<html lang="en">
<head>
    <title>Airdrop</title>
    <meta charset="utf-8" />
    <meta name="description" content="Airdrop" />
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="../model/library/stylesheet/list-style.css" />
    <link rel="icon" type="jpg" href="../model/library/assets/logo-noxy.jpg" />
</head>
<body>
    <div id="boxes">
        <a onclick="pop()"><i class="fa-times-circle">×</i></a>
        <form action="../model/app/Rest-Api/json-view.php" method="post">
            <input type="text" name="save" placeholder="rename-here.json" maxlength="25">
            <button type="submit" name="submit">save</button>
        </form>
    </div>
    <div class="container">
        <table class="responsive-table">
            <caption>Airdrop list and information</caption>
            <thead>
                <tr>
                    <th scope="col">Airdrop</th>
                    <th scope="col">Fund Raised</th>
                    <th scope="col">Type</th>
                    <th scope="col">Roadmap</th>
                    <th scope="col">Source</th>
                    <th scope="col">Last Update</th>
                    <th scope="col">Full View</th>
                </tr>
            </thead>
            <?php

            require "../model/app/configuration/airdrop.php";

            if (isset($_GET['auth'])) {
                $cari = addslashes($_GET['cari']);
                $query = mysqli_query($db, "SELECT * FROM list WHERE token like '%".$cari."%' OR id like '%".$cari."%' OR airdrop like '%".$cari."%' OR funding like '%".$cari."%' OR type like '%".$cari."%' OR roadmap like '%".$cari."%'");
            } else {
                $query = mysqli_query($db, "SELECT * FROM list ORDER BY id, airdrop ASC");
            }
            while ($hasil = mysqli_fetch_array($query)) {

                ?>
                <tbody>
                    <tr>
                        <th scope="row"><?php echo htmlentities($hasil['airdrop']); ?></th>
                        <td data-title="Fund Raised"><?php echo htmlentities($hasil['funding']); ?></td>
                        <td data-title="Type"><?php echo htmlentities($hasil['type']); ?></td>
                        <td data-title="Roadmap"><?php echo htmlentities($hasil['roadmap']); ?></td>
                        <td data-title="Source"><?php echo htmlentities($hasil['source']); ?></td>
                        <td data-title="Post" data-type="datetime"><?php echo htmlentities($hasil['realtime']); ?></td>
                        <td data-title="Detail" data-type="link"><a link href="activity_id?<?php $permitted_chars = '01234567890987654321abcdef1234567890ghijk9876543210123456789lmnopqrs1234567890tuvwxyz01234567890987654321ABCDEFGH1234567890IJK0123456789pqrstu1234567890vwxyz012345678901234567890abcdefghijkL1234567890MNOPQRSTUVWQXYZ098765432109876543210abcdefghijklmnopqr1234567890stuvwxyz1234567890abcdefghijklmnopqrstuvwxyz';?><?php echo $auth1 = substr(str_shuffle($permitted_chars), 0, 8);?>-<?php echo $auth2 = substr(str_shuffle($permitted_chars), 0, 4);?>-<?php echo $auth3 = substr(str_shuffle($permitted_chars), 0, 4);?>-<?php echo $auth4 = substr(str_shuffle($permitted_chars), 0, 12); ?>&hash=<?php echo $hasil['hash']; ?>&token=<?php echo $hasil['token']; ?>_identify==<?php echo $hasil['airdrop']; ?>">click-here</a></td>
                    </tr>
                </tbody>
                <?php
            }
            ?>
        </table>
        <div class="footer">
            <h3>download file: <a class="tmbl" onclick="pop()">json</a></h3>
            <li>Source: Cryptorank &amp; Airdropfinder</li>
            <li>Partner: Airdrop For All | AFA</li>
            <li>Powered by: @Noxy_id66 &amp; <a link href="zkprot?auth=<?php require "../model/app/Rest-Api/token.php"; echo "0x1$auth"; ?>">root-access</a></li>
        </div>
    </div>
    <?php
    require "../model/app/Rest-Api/access-view.php";
    ?>
    <script>
        if ('serviceWorker' in navigator && 'PushManager' in window) {
            window.addEventListener('beforeinstallprompt', (e) => {
                e.preventDefault();

                const deferredPrompt = e;

                const installButton = document.createElement('button');
                installButton.textContent = 'Install App v2.0x1';
                installButton.style.position = 'absolute';
                installButton.style.top = '50px';
                installButton.style.left = '50%';
                installButton.style.transform = 'translateX(-50%)';
                installButton.style.zIndex = '1';
                installButton.style.padding = '10px 20px';
                installButton.classList.add('btn-grad');
                installButton.style.color = 'blue';
                installButton.style.border = '1px solid white';
                installButton.style.borderRadius = '5px';
                installButton.style.cursor = 'pointer';

                installButton.addEventListener('click', () => {

                    deferredPrompt.prompt();

                    deferredPrompt.userChoice.then(choiceResult => {
                        if (choiceResult.outcome === 'accepted') {
                            console.log('App installed');
                        } else {
                            console.log('App installation declined');
                        }

                        installButton.style.display = 'none';
                    });
                });

                document.body.appendChild(installButton);
            });
        }
        
        var t = 0;
        function pop() {
            if (t == 0) {
                document.getElementById("boxes").style.display = "block";
                t = 1;
            } else {
                document.getElementById("boxes").style.display = "none";
                t = 0;
            }
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
</body>
</html>