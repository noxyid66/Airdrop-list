<?php

require "../model/app/configuration/airdrop.php";

$hash = abs($_GET['hash']);
$sql = "SELECT * FROM list WHERE hash=$hash";
$query = mysqli_query($db, $sql);
$hasil = mysqli_fetch_assoc($query);
if (mysqli_num_rows($query) < 0) {
    die("data tidak ditemukan...");
}
?>
<html>
<head>
    <title><?php echo htmlentities($hasil['airdrop']); ?></title>
    <meta charset="utf-8" />
    <meta name="description" content="view-page-full" />
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="../model/library/stylesheet/info-style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">    <link rel="stylesheet" href="https://public.codepenassets.com/css/normalize-5.0.0.min.css">
    <link rel="icon" type="jpeg" href="../model/library/assets/setting.jpg" />
</head>
<body>
    <div class="container">
        <section class="main">
            <div class="view-card">
                <div class="title">
                    <h2><?php echo htmlentities($hasil['airdrop']); ?></h2>
                </div>
                <div class="info">
                    <div class="funding">
                        <h2>Fund Raised</h2>
                        <h3><?php echo htmlentities($hasil['funding']); ?></h3>
                    </div>
                    <div class="funding">
                        <h2>Type</h2>
                        <h3><?php echo htmlentities($hasil['type']); ?></h3>
                    </div>
                    <div class="funding">
                        <h2>Roadmap</h2>
                        <h3><?php echo htmlentities($hasil['roadmap']); ?></h3>
                    </div>
                    <div class="funding">
                        <h2>Running</h2>
                        <h3><?php echo htmlentities($hasil['running']); ?></h3>
                    </div>
                    <div class="funding">
                        <h2>Task</h2>
                        <h3><?php echo htmlentities($hasil['task']); ?></h3>
                    </div>
                </div>
                <div class="link">
                    <input id="text-copy" value="<?php echo htmlentities($hasil['linkreff']); ?>" readonly="">
                    <i class="fa fa-copy" onclick="copyText()"></i>
                    <div class="notif">
                        <span class="popuptext" id="myPopup">copyed!</span>
                    </div>
                </div>
                <div class="tutorial">
                    <h2>Tutorial</h2>
                    <pre><?php echo htmlentities($hasil['tutorial']); ?>
                    </pre>
                </div>
                <div class="note">
                    <h2>Note</h2>
                    <h3>
                        <?php echo htmlentities($hasil['note']); ?>
                    </h3>
                </div>
                <div class="footer">
                    <h2>Source: <?php echo htmlentities($hasil['source']); ?></h2>
                    <h3>Post: <?php echo htmlentities($hasil['realtime']); ?></h3>
                </div>
            </div>
        </section>
    </div>
    <script>
        function copyText() {
            var copyText = document.getElementById("text-copy");
            copyText.select();
            document.execCommand("copy");
            var popup = document.getElementById("myPopup");
            popup.classList.toggle("show");
            setTimeout(() => {
                popup.classList.toggle("of");
            }, 2000);

        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <?php
    require "../model/app/Rest-Api/access-path.php";
    ?>
</body>
</html>