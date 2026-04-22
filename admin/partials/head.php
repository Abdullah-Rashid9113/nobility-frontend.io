<!DOCTYPE html>
<html lang="en">
<?php

$page_url = "http://localhost/nobility-frontend";


?>
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : ''; ?></title>
    <meta name="description" content="<?php echo isset($description) ? $description : ''; ?>">
    <meta property="og:image" content="<?php echo $page_url; ?>/assets/images/og.png">
    <link rel="shortcut icon" href="<?php echo $page_url; ?>/assets/images/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo $page_url; ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $page_url; ?>/assets/css/fonts.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css" />

    <!-- Bootstrap CSS -->
    <link href="<?php echo $page_url; ?>/assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="<?php echo $page_url; ?>/assets/js/jquery.js"></script>
</head>
