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


    <?php foreach ($items as $item):?>
        <h1 style="text-align: left"><?php echo $item['title'];?></h1>
        <h3 style="text-align: left"><?php echo $item['text'];?></h3>

    <?php endforeach; ?>
    <a href="/lesson1/add.php">Добавить новость</a>


<?php require __DIR__ .'/../../form_end.php';
