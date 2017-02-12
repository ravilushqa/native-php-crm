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

</head>

<body>
<h1>Панель Администратора</h1><br>
<h3>Работа с новостями:</h3>
<form action="/admin.php" method="get" enctype="multipart/form-data">
    <select name="Ctrl">
        <option value="Admin">Админ</option>
    </select>
    <select name="act">
        <option value="Ins">Добавить</option>
        <option value="Upd">Обновить</option>
        <option value="Del">Удалить</option>
    </select>
<button type="submit">Сделать</button>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>