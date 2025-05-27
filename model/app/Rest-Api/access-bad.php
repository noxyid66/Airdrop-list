<?php
require "token.php";
require "user-info.php";

$path_ip = get_client_ip();
$path_browser = get_client_browser();
$path_server = $_SERVER['HTTP_USER_AGENT'];
$path_url = $_SERVER['HTTP_REFERER'];
$path_request = $_SERVER['REQUEST_URI'];
$part_port = $_SERVER['SERVER_PORT'];
?>
<script>
    console.log('%cmessage:', 'color: crimson; font-size: 10px; font-style: bold;');
    console.log('warning bad request to access!...');
    const x = {
        status: 'access_danied',
        protocol: ['0x<?php echo $auth; ?>'],
        path_info: {
            ip: '<?php echo $path_ip; ?>',
            browser: '<?php echo $path_browser; ?>',
            device: '<?php echo $path_server; ?>',
            url: '<?php echo $path_url; ?>',
            request: '<?php echo $path_request; ?>',
            port: '<?php echo $part_port; ?>'
        }};
    console.dir(x, {
        depth: 0, colors: true
    });

</script>