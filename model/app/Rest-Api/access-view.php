<?php
require "token.php";
require "user-info.php";

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
    console.log('%cmessage:', 'color: crimson; font-size: 10px; font-style: bold;');
    console.log('Welcome to Airdrop list.powered by @Noxy_id66!');
    const x = {
        status: 'render list',
        protocol: ['0x<?php echo $auth; ?>'],
        path_info: {
            ip: '<?php echo $path_ip; ?>',
            browser: '<?php echo $path_browser; ?>',
            device: '<?php echo $path_server; ?>',
            url: '<?php echo $path_url; ?>',
            request: '<?php echo $path_request; ?>',
            port: '<?php echo $part_port; ?>',
            source : '<?php echo $part_source_web;?>',
            ch_airdrop_indonesia :'<?php echo $part_source_comunity;?>',
            partners : '<?php echo $part_source_partners; ?>',
            frontend : 'https://codepen.io/pixelchar/pen/rNaKLM'
        }};
    console.dir(x, {
        depth: 0, colors: true
    });

</script>