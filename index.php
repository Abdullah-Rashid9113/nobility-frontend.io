<?php
$is_https = (
    (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ||
    (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https')
);

$currentPage = basename($_SERVER['PHP_SELF']);

$page_url = $is_https
    ? "https://nobility-frontend.apexcoders.co.uk"
    : "http://localhost/nobility-frontend";
<<<<<<< HEAD

?>

=======
?>
>>>>>>> 7c1d3c7b44812b216807f0bf79444c7151d3dddf
