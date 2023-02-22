<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $config ? $config->getDescription() : null?>">
    <meta name="author" content="">

    <!-- Google tag (gtag.js) -->
    <?php if($config) { ?>
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?= $config->getGoogleAnalyticsMetricId() ?>"></script>
        
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', <?= $config->getGoogleAnalyticsMetricId() ?>);
        </script>
    <?php } ?>

    <!-- <link rel="shortcut icon" href="assets/img/icon.png"> -->
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- local css -->
    <link rel="stylesheet" href="/admin//resources/assets/css/main.css">

    <title><?php  $config? $config->getTitle() : 'Site blank' ?></title>
</head>

<body class="<?php if (Core\Helper::getRequestUri() == '/admin/login') {
                    echo 'ms-0';
                } ?>">
