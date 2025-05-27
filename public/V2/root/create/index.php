<?php
session_start();

require "../../../../model/app/Rest-Api/token.php";
require "../../../../model/app/Rest-Api/access-create.php";

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
<html>
<head>
    <title>create-airdrop</title>
    <meta charset="utf-8" />
    <meta name="description" content="create airdrop" />
    <meta name="viewport" content="width=device-width, maximum-scale=1, user-scalable=yes" />
    <link rel="stylesheet" href="../../../../model/library/stylesheet/create-style.css" />
    <link rel="icon" type="jpg" href="../../../../model/library/assets/auth.jpeg" />
</head>
<?php
if (isset($_GET['alert'])) {
    if ($_GET['alert'] == "bad") {
        echo '<div class="alert"><span class="closebtn">&times;</span>error</div>';
    } else if ($_GET['alert'] == "success") {
        echo '<div class="alert"><span class="closebtn">&times;</span>success upload airdrop</div>';
    }
}
?>
<body>
    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">
            <form action="../../../../model/app/V2-protocol/create-list.php" method="post">
                <input type="hidden" name="token" value="0x<?php $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXZ'; echo substr(str_shuffle($permitted_chars), 0, 50); ?>">
                <div class="formbold-input-group">
                    <label for="airdrop" class="formbold-form-label"> Airdrop </label>
                    <input type="text" name="airdrop" required="" placeholder="airdrop" min="1" maxlength="200" class="formbold-form-input" />
                </div>
                <div class="formbold-input-group">
                    <label for="funding" class="formbold-form-label"> Funding </label>
                    <input type="text" name="funding" required="" placeholder="funding" min="1" maxlength="200" class="formbold-form-input" />
                </div>
                <div class="formbold-input-group">
                    <label class="formbold-form-label">Type</label>
                    <select class="formbold-form-select" name="type" id="airdrop">
                        <option value="0" selected>select type</option>
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
                    <input type="text" name="roadmap" required="" placeholder="roadmap" min="1" maxlength="200" class="formbold-form-input" />
                </div>
                <div class="formbold-input-group">
                    <label for="running" class="formbold-form-label"> Running </label>
                    <input type="text" name="running" required="" placeholder="running" min="1" maxlength="200" class="formbold-form-input" />
                </div>
                <div class="formbold-input-group">
                    <label for="task" class="formbold-form-label"> Task </label>
                    <input type="text" name="task" required="" placeholder="task" min="1" maxlength="200" class="formbold-form-input" />
                </div>
                <div class="formbold-input-group">
                    <label for="linkreff" class="formbold-form-label"> Link/Reff </label>
                    <input type="text" name="linkreff" required="" placeholder="link/reff" min="1" maxlength="500" class="formbold-form-input" />
                </div>
                <div class="formbold-input-group">
                    <label for="source" class="formbold-form-label"> Source </label>
                    <input type="text" name="source" required="" placeholder="source" min="1" maxlength="500" class="formbold-form-input" />
                </div>
                <div class="note">
                    <label for="tutorial" class="formbold-form-label">Tutorial</label>
                    <textarea type="text" name="tutorial" placeholder="tutorial" rows="25" maxlength="100000" class="formbold-form-textarea"></textarea>
                </div>
                <div class="note">
                    <label for="note" class="formbold-form-label">Note</label>
                    <textarea type="text" name="note" placeholder="note" rows="6" maxlength="5000" class="formbold-form-textarea"></textarea>
                </div>
                <input type="hidden" name="realtime" value="<?php date_default_timezone_set("Asia/Jakarta"); echo date("d-m-Y"); ?>">
                <input type="hidden" name="id" id="id" value="">
                <button type="submit" name="create" class="formbold-btn">submit</button>
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