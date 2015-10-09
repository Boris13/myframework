<?php
/**
 * Created by PhpStorm.
 * User: Boris
 * Date: 09.10.2015
 * Time: 13:00
 */
?>
<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?=URL ?>/css/bootstrap.min.css">
    <meta name="description" content="<?=$this->description ?>">
    <meta name="keywords" content="<?=$this->keywords ?>">
    <title><?=$this->title ?></title>
</head>
<body>
<div class="wrap">
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="../" class="navbar-brand">MyFramework</a>
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse" id="navbar-main">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?=URL  ?>">Головна</a>
                    </li>
                    <li>
                        <a href="/contact">Кантакт</a>
                    </li>
                    <li>
                        <a href="/database/index">Тест БД</a>
                    </li>


            </div>
        </div>
    </div>
    <br><br><br><br>

    <div class="container">
        <div class="message"><?=$this->send_message ?></div>
        <?=$html ?>


    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Borys Company <?= date('Y') ?></p>
        <p class="pull-right"><?  ?></p>
    </div>
</footer>
</body>
</html>
