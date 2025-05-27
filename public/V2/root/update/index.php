<?php
session_start();

require "../../../../model/app/Rest-Api/token.php";
require "../../../../model/app/Rest-Api/access-update.php";

if ($_SESSION['session'] != "true") {
    header("location: ../../index.php?alert=bad_request&&auth=0x1$auth");
    exit();
}
$timeout = 600;
if (isset($_SESSION['start_time'])) {
    $elapsed_time = time() - $_SESSION['start_time'];
    if ($elapsed_time >= $timeout) {
        session_destroy();
        header("location:../../index.php?alert=session_destroy&&auth=0x1$auth", true, 301);
    }
}
$_SESSION['start_time'] = time();

?>
<?php

require "../../../../model/app/configuration/airdrop.php";

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
    <title>update-airdrop</title>
    <meta charset="utf-8" />
    <meta name="description" content="update airdrop" />
    <meta name="viewport" content="width=device-width, maximum-scale=1, user-scalable=yes" />
    <link rel="stylesheet" href="../../../../model/library/stylesheet/create-style.css" />
    <link rel="icon" type="jpg" href="../../../../model/library/assets/auth.jpeg" />
</head>
<?php
if (isset($_GET['alert'])) {
    if ($_GET['alert'] == "bad") {
        echo '<div class="alert"><span class="closebtn">&times;</span>error</div>';
    } else if ($_GET['alert'] == "success") {
        echo '<div class="alert"><span class="closebtn">&times;</span>success update airdrop</div>';

    }
}
?>
<body>
    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">
            <form action="../../../../model/app/V2-protocol/update-list.php" method="post">
                <input type="hidden" name="hash" value="<?php echo $hasil['hash'] ?>">
                <input type="hidden" name="token" value="<?php echo htmlentities($hasil['token']); ?>">
                <div class="formbold-input-group">
                    <label for="airdrop" class="formbold-form-label"> Airdrop </label>
                    <input type="text" name="airdrop" value="<?php echo htmlentities($hasil['airdrop']); ?>" required="" placeholder="airdrop" min="1" maxlength="200" class="formbold-form-input" />
                </div>
                <div class="formbold-input-group">
                    <label for="funding" class="formbold-form-label"> Funding </label>
                    <input type="text" name="funding" value="<?php echo htmlentities($hasil['funding']); ?>" required="" placeholder="funding" min="1" maxlength="200" class="formbold-form-input" />
                </div>
                <div class="formbold-input-group">
                    <label class="formbold-form-label">Type</label>
                    <select class="formbold-form-select" name="type" id="airdrop">            <option value="0" selected>select type</option>
                        <option selected="" value="<?php echo htmlentities($hasil['type']); ?>"><?php echo htmlentities($hasil['type']); ?></option>
                        <option value="testnet">testnet</option>
                        <option value="depin">depin</option>
                        <option value="mining">mining</option>
                        <option value="miniapps">miniapps</option>
                        <option value="other">other</option>
                        <option value="giveaway">giveaway</option>
                        <option value="retro">retro</option>
                    </select>
                </div>
                <div class="formbold-input-group">
                    <label for="roadmap" class="formbold-form-label"> Roadmap </label>
                    <input type="text" name="roadmap" value="<?php echo htmlentities($hasil['roadmap']); ?>" required="" placeholder="roadmap" min="1" maxlength="200" class="formbold-form-input" />
                </div>
                <div class="formbold-input-group">
                    <label for="running" class="formbold-form-label"> Running </label>
                    <input type="text" name="running" value="<?php echo htmlentities($hasil['running']); ?>" required="" placeholder="running" min="1" maxlength="200" class="formbold-form-input" />
                </div>
                <div class="formbold-input-group">
                    <label for="running" class="formbold-form-label"> Task </label>
                    <input type="text" name="task" value="<?php echo htmlentities($hasil['task']); ?>" required="" placeholder="task" min="1" maxlength="200" class="formbold-form-input" />
                </div>
                <div class="formbold-input-group">
                    <label for="linkreff" class="formbold-form-label"> Link/Reff </label>
                    <input type="text" name="linkreff" value="<?php echo htmlentities($hasil['linkreff']); ?>" required="" placeholder="link/reff" min="1" maxlength="500" class="formbold-form-input" />
                </div>
                <div class="formbold-input-group">
                    <label for="id" class="formbold-form-label"> Id Type </label>
                    <input readonly="" type="text" name="id" id="id" value="<?php echo htmlentities($hasil['id']); ?>" class="formbold-form-input" />
                </div>
                <div class="formbold-input-group">
                    <label for="running" class="formbold-form-label"> Source </label>
                    <input type="text" name="source" required="" value="<?php echo htmlentities($hasil['source']); ?>" placeholder="source" min="1" maxlength="500" class="formbold-form-input" />
                </div>
                <div class="note">
                    <label for="tutorial" class="formbold-form-label">Tutorial</label>
                    <textarea type="text" name="tutorial" placeholder="tutorial" rows="25" maxlength="100000" class="formbold-form-textarea"><?php echo htmlentities($hasil['tutorial']); ?></textarea>
                </div>
                <div class="note">
                    <label for="note" class="formbold-form-label">Note</label>
                    <textarea type="text" name="note" placeholder="note" rows="6" maxlength="5000" class="formbold-form-textarea"><?php echo htmlentities($hasil['note']); ?></textarea>
                </div>
                <input type="hidden" name="realtime" value="<?php date_default_timezone_set("Asia/Jakarta"); echo date("d-m-Y"); ?>">
                <button type="submit" name="update" class="formbold-btn">update</button>
            </form>
        </div>
    </div>
    <script>
        const select = document.querySelector('select');
        select.addEventListener('change', setAirdrop);

        function setAirdrop() {
            const type = select.value;

            if (type === 'testnet') {
                document.querySelector("#id").value = "1";
            } else if (type === 'depin') {
                document.querySelector("#id").value = "2";
            } else if (type === 'mining') {
                document.querySelector("#id").value = "3";
            } else if (type === 'miniapps') {
                document.querySelector("#id").value = "4";
            } else if (type === 'other') {
                document.querySelector("#id").value = "5";
            } else if (type === 'giveaway') {
                document.querySelector("#id").value = "6";
            } else if (type === 'retro') {
                document.querySelector("#id").value = "7";
            } else {
                document.querySelector("#id").value = "id not selected";
            }
        }
    </script>
</body>
</html>