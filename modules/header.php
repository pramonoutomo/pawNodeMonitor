<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title><?php echo currencyName($currency); ?> Node Monitor - <?php echo $nanoNodeName; ?></title>

        <meta name="Description" content="Paw Node Monitor is a server-side PHP-based monitor for Nano nodes.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="robots" content="all" />
        <link rel="stylesheet" href="static/css/bootstrap.min.css?v=<?php echo PROJECT_VERSION; ?>" media="screen">
        <link rel="stylesheet" href="static/css/fontawesome-all.min.css?v=<?php echo PROJECT_VERSION; ?>" media="screen">
        <link rel="stylesheet" href="static/css/main.css?v=<?php echo PROJECT_VERSION; ?>" media="screen">
        <link rel="stylesheet" href="static/themes/<?php echo $themeChoice; ?>/css/theme.css?v=<?php echo PROJECT_VERSION; ?>" media="screen">
        <link rel="apple-touch-icon" sizes="180x180" href="static/img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="static/img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="static/img/favicon/favicon-16x16.png">
        <link rel="manifest" href="static/img/favicon/site.webmanifest">
        <link rel="mask-icon" href="static/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="static/img/favicon/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="static/img/favicon/browserconfig.xml">
        <meta property="og:title" content="<?php echo currencyName($currency); ?> Node Monitor - <?php echo $nanoNodeName; ?>">
        <meta property="og:description" content="<?php echo currencyName($currency); ?> Node Monitor">
        <meta property="og:type" content="website">
        <meta property="og:image" content="static/img/nano-mark-light.png">
        <meta name="paw" content="<?php echo $nanoDonationAccount; ?>">
    </head>
    <body>
    <script>
    var init = [];
    var GLOBAL_REFRESH = <?php echo $autoRefreshInSeconds; ?>;
    var GLOBAL_DIGITS = <?php echo $nanoNumDecimalPlaces; ?>;
    </script>

    <!--- add the navbar -->
    <?php include __DIR__ . '/navbar.php'; ?>

    <!-- logo and ticker -->
    <div class="container">
