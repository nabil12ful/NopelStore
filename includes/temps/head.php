<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= !empty($title) ? $title : 'NopelStore' ?></title>
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?= echoPath(_IMGS_, 'favicon.png') ?>" />
        <!-- Themefisher Icon font -->
        <link rel="stylesheet" href="<?= echoPath(_PLG_, 'themefisher-font/style.css') ?>">
        <!-- bootstrap.min css -->
        <link rel="stylesheet" href="<?= echoPath(_PLG_, 'bootstrap/css/bootstrap.min.css', true) ?>">
        <!-- Animate css -->
        <link rel="stylesheet" href="<?= echoPath(_PLG_, 'animate/animate.css') ?>">
        <!-- Slick Carousel -->
        <link rel="stylesheet" href="<?= echoPath(_PLG_, 'slick/slick.css') ?>">
        <link rel="stylesheet" href="<?= echoPath(_PLG_, 'slick/slick-theme.css') ?>">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="<?= echoPath(_CSS_, 'style.css', true) ?>">
        <!--font asoame  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>