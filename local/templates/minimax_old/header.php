<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php

use Bitrix\Main\Page\Asset;
?>
<div id="panel"><? $APPLICATION->ShowPanel();?></div>
<!DOCTYPE html>
<!-- <html lang="en"> -->
<head>
    <?php $APPLICATION->ShowHead() ?>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <?php
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/main.css');
    // Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/assets/css/fontawesome-all.min.css');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/browser.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/breakpoints.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/util.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/main.js');

    Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />');
    
    ?>
    <meta charset="utf-8" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" /> -->
    <!-- <link rel="stylesheet" href="assets/css/main.css" /> -->
</head>
<?php

// echo (SITE_TEMPLATE_PATH . '/assets/css/main.css');
?>

<body>
    <div id="page-wrapper">

        <!-- Header -->
        <div id="header-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <header id="header">
                            <h1><a href="index.html" id="logo">Minimaxing</a></h1>
                            <nav id="nav">
                                <a href="index.html" class="current-page-item">Homepage</a>
                                <a href="twocolumn1.html">Two Column #1</a>
                                <a href="twocolumn2.html">Two Column #2</a>
                                <a href="onecolumn.html">One Column</a>
                                <a href="threecolumn.html">Three Column</a>
                            </nav>
                        </header>

                    </div>
                </div>
            </div>
        </div>