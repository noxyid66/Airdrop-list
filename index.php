<html>
<head>
    <title>Authority</title>
    <meta charset="utf-8" />
    <meta name="description" content="aidrop center" />
    <link rel="stylesheet" href="model/library/stylesheet/portal.css" />
    <link rel="icon" type="jpg" href="model/library/assets/logo-noxy.jpg" />
</head>
<body onload="type_text()">
    <div class="load"></div>
    <div class="container" id="container">
        <div class="content"></div>
        <div class="copyright"></div>
        <!-- partial:index_partial.jsx -->
        <div class="screen">
            <div id="screen" class="terminal_emulator"></div>
        </div>
        <div class="loading-persen"></div>
        <div class="loading"></div>
    </div>
    <?php

    require "model/app/Rest-Api/user-info.php";

    $permitted_chars = '01234567890987654321abcdefghijk9876543210123456789lmnopqrstuvwxyz1234567890987654321ABCDEFGHIJK012345678901234567890LMNOPQRSTUVWQXYZ098765432109876543210';
    $auth = substr(str_shuffle($permitted_chars), 0, 45);

    $permitted = '01234567';
    $install = substr(str_shuffle($permitted), 0, 1);


    $path_ip = get_client_ip();
    $path_browser = get_client_browser();
    $path_server = $_SERVER['HTTP_USER_AGENT'];
    $path_url = $_SERVER['HTTP_REFERER'];
    $path_request = $_SERVER['REQUEST_URI'];
    $part_port = $_SERVER['SERVER_PORT'];
    $part_source_web = "cryptorank.io";
    $part_source_comunity = "t.me/airdropfind";
    $part_source_partners = "t.me/Airdrop4ll";
    ?>
    <script>
        var TerminalEmulator = {
            init: function(screen) {
                var inst = Object.create(this);
                inst.screen = screen;
                inst.createInput();

                return inst;
            },

            createInput: function() {
                var inputField = document.createElement('div');
                var inputWrap = document.createElement('div');

                inputField.className = 'terminal_emulator__field';
                inputField.innerHTML = '';
                inputWrap.appendChild(inputField);
                this.screen.appendChild(inputWrap);
                this.field = inputField;
                this.fieldwrap = inputWrap;
            },


            enterInput: function(input) {
                return new Promise((resolve, reject) => {
                    var randomSpeed = (max, min) => {
                        return Math.random() * (max - min) + min;
                    }

                    var speed = randomSpeed(20, 40);
                    var i = 0;
                    var str = '';
                    var type = () => {

                        str = str + input[i];
                        this.field.innerHTML = str.replace(/ /g, '&nbsp;');
                        i++;

                        setTimeout(() => {
                            if (i < input.length) {
                                if (i % 5 === 0) speed = randomSpeed(30, 50);
                                type();
                            } else {
                                console.log('tick');
                                setTimeout(() => {
                                    console.log('tock');
                                    resolve();
                                }, 400);

                            }
                        },
                            speed);


                    };


                    type();

                });
            },

            enterCommand: function() {
                return new Promise((resolve,
                    reject) => {
                    var resp = document.createElement('div');
                    resp.className = 'terminal_emulator__command';
                    resp.innerHTML = this.field.innerHTML;
                    this.screen.insertBefore(resp,
                        this.fieldwrap);

                    this.field.innerHTML = '';
                    resolve();
                })
            },

            enterResponse: function(response) {

                return new Promise((resolve,
                    reject) => {
                    var resp = document.createElement('div');
                    resp.className = 'terminal_emulator__response';
                    resp.innerHTML = response;
                    this.screen.insertBefore(resp,
                        this.fieldwrap);

                    resolve();
                })


            },

            wait: function(time, busy) {
                busy = (busy === undefined) ? true: busy;
                return new Promise((resolve,
                    reject) => {
                    if (busy) {
                        this.field.classList.add('waiting');
                    } else {
                        this.field.classList.remove('waiting');
                    }
                    setTimeout(() => {
                        resolve();
                    }, time);
                });
            },

            reset: function() {
                return new Promise((resolve, reject) => {
                    this.field.classList.remove('waiting');
                    resolve();
                });
            }

        };

        var TE = TerminalEmulator.init(document.getElementById('screen'));


        TE.wait(800, false)
        .then(TE.enterInput.bind(TE, ' sudo -r authorization zkprotocol_v2.0x1'))
        .then(TE.enterCommand.bind(TE))
        .then(TE.enterResponse.bind(TE, 'ᅠrender cryptography component...'))
        .then(TE.wait.bind(TE, 200))
        .then(TE.enterResponse.bind(TE, 'ᅠ|- protocol 0x1<?php echo $auth; ?>'))
        .then(TE.wait.bind(TE, 100))
        .then(TE.enterResponse.bind(TE, 'ᅠ|- public ip <?php echo $path_ip; ?> '))
        .then(TE.wait.bind(TE, 200))
        .then(TE.enterResponse.bind(TE, 'ᅠ|- browser <?php echo $path_browser; ?>'))
        .then(TE.wait.bind(TE, 300))
        .then(TE.enterResponse.bind(TE, 'ᅠ|- device <?php echo $path_server; ?>'))
        .then(TE.wait.bind(TE, 500))
        .then(TE.enterResponse.bind(TE, 'ᅠrender http request...'))
        .then(TE.wait.bind(TE, 100, false))
        .then(TE.enterResponse.bind(TE, 'ᅠ- path info port <?php echo $part_port; ?>'))
        .then(TE.wait.bind(TE, 100))
        .then(TE.enterResponse.bind(TE, 'ᅠ- path info url <?php echo $path_url; ?>  status active!'))
        .then(TE.wait.bind(TE, 30))
        .then(TE.enterResponse.bind(TE, 'ᅠ- path info req /root/partial/indexes.jsx delta zero_'))
        .then(TE.wait.bind(TE, 200))
        .then(TE.enterResponse.bind(TE, 'ᅠ- remote: installing packpages portal-style.css objects true'))
        .then(TE.wait.bind(TE, 30))
        .then(TE.enterResponse.bind(TE, 'ᅠ- remote: installing packpages bootstrap.js objects true'))
        .then(TE.wait.bind(TE, 200))
        .then(TE.enterResponse.bind(TE, 'ᅠ- remote: installing packpages zk-protocol.jsx objects true'))
        .then(TE.wait.bind(TE, 10))
        .then(TE.enterResponse.bind(TE, 'ᅠ- remote: installing packpages manifest.json object false'))
        .then(TE.wait.bind(TE, 300))
        .then(TE.enterResponse.bind(TE, 'ᅠ- remote: installing packpages service-wor.js objects false'))
        .then(TE.wait.bind(TE, 30))
        .then(TE.enterResponse.bind(TE, 'ᅠ- remote: installing packpages zk-protocol.jsx objects init'))
        .then(TE.wait.bind(TE, 100))
        .then(TE.enterResponse.bind(TE, 'ᅠ- remote: installing packpages zk-protocol.jsx objects unpack'))
        .then(TE.wait.bind(TE, 200))
        .then(TE.enterResponse.bind(TE, 'ᅠ- remote: installing packpages zk-protocol.jsx objects remove'))
        .then(TE.wait.bind(TE, 100))
        .then(TE.enterResponse.bind(TE, 'ᅠ- remote: installing packpages rpc-csx.json objects false 500'))
        .then(TE.wait.bind(TE, 30))
        .then(TE.enterResponse.bind(TE, 'ᅠ- remote: installing packpages token-prot.php objects true 0x'))
        .then(TE.wait.bind(TE, 100))
        .then(TE.enterResponse.bind(TE, 'ᅠ- remote: installing packpages client-info.php objects true'))
        .then(TE.wait.bind(TE, 300))
        .then(TE.enterResponse.bind(TE, 'ᅠ- remote: installing packpages prot-v20x1.bin objects igtnore'))
        .then(TE.wait.bind(TE, 20))
        .then(TE.enterResponse.bind(TE, 'ᅠ- remote: installing packpages sql json csx objects done!'))
        .then(TE.wait.bind(TE, 100))
        .then(TE.enterResponse.bind(TE, 'ᅠ- build : componen & packpages airdrop-list complete 100%'))
        .then(TE.wait.bind(TE, 700))
        .then(TE.enterResponse.bind(TE, 'installed (1<?php echo $install; ?>/17)...'))
        .then(TE.reset.bind(TE));

        setTimeout(() => {
            window.location.href = "home";
        }, 7700);
    </script>
</body>
</html>