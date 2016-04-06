<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PHP lvl 2</title>

    <!-- Bootstrap core CSS -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
    <style>
        h1,h2,h3,h4,h5,h6 {
            text-align: center;
        }
        img {
            height:200px;
            margin-right: 10px;
        }
        #galery{
            display:block;
            text-align:center;
            margin:0 auto;

        }

    </style>
</head>

<body>
<div class="container-fluid">
    <div class="row">
        <div class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="../../index.html">Обучение php</a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                        <span class="sr-only">Открыть навигацию</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="responsive-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Новости</a></li>
                        <li><a href="../../archive/2/index.php">Урок 2</a></li>
                        <li><a href="../../archive/3/index.php">Урок 3</a></li>
                        <li><a href="../../archive/4/index.php">Урок 4</a></li>
                        <li><a href="../../archive/5/index.php">Урок 5</a></li>
                        <li><a href="../../archive/6/index.php">Урок 6</a></li>
                        <li><a href="../../archive/7/index.php">Урок 7</a></li>
                        <li><a href="../../archive/8/index.php">Урок 8</a></li>
                        <li><a href="../../portfolio/index.html">Portfolio</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <h1>Новости</h1>
    <?php foreach ($items as $item):?>
    <h3 style="text-align: left"><?php echo $item['title'];?></h3>
        <a href="newsone.php">прочитать новость целиком</a>
    <?php endforeach; ?>
    <br>
    <a href="/lesson1/add.php">Добавить новость</a><br>
<h4 style="text-align: right"><?php
echo 'Дата:           '. date('d-m-Y') ."\n";
echo 'Время:           '. date('H:i:s') ."\n";
?></h4>



<?php require __DIR__ .'/../../form_end.php';