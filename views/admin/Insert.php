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
    <link href="../../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/style.css" rel="stylesheet">
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
<h1>Панель Администратора</h1>
<h2>Добавить новость</h2>
    <form action="../../index.php?ctrl=Admin&act=Ins" method="post" enctype="multipart/form-data">

        <div class="col-lg-6">
            <div class = "form-group">
                <label for = "name">Заголовок</label>
                <textarea name="title" class = "form-control" rows = "3"></textarea>
            </div>
        </div>
        <div style="clear: both;" class="col-lg-6">
            <div class = "form-group">
                <label for = "name">Основной текст</label>
                <textarea name="text" class = "form-control" rows = "7"></textarea>
            </div
</div>
        <input type="submit" style="clear: both">
    </form>
    <br>
    <a  href="../../index.php">На главную</a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>