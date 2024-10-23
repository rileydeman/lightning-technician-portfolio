<!doctype html>
<html lang="en-AU">

<?php
/* @var array $config */
include_once("./app/config/config.php");
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME | <?= $config["titles"]["website"] ?></title>

    <link rel="icon" href="<?= BASEURL ?>favicon.ico">
    <link rel="icon" href="<?= BASEURL ?>favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="<?= BASEURL ?>favicon.png">

<!--    Linking of the css files-->
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/fonts.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/style.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/header.css?v=<?= time() ?>">

    <!--    Linking of the javascript files, defer = reading/link the file at last-->
    <script defer src="<?= BASEURL ?>public/assets/js/header.js?v=<?= time() ?>"></script>
</head>

<body>

<header>
<!--    Getting the header document-->
    <?php include "public/core/header.php" ?>
</header>

<main>
    <h1>Legend</h1>
    <p>Main</p>
</main>

<footer>
<!--    Getting the footer document-->
    <?php include "public/core/footer.php" ?>
</footer>

</body>

</html>