
<h3><a href="/../lesson5/views/admin/Insert.php">Добавить Новость</a></h3>
<?php foreach ($items as $item): ?>
    <h3><?php echo $item->title?></h3>
    <div style="width: 300px"><p style="float: left">ID новости равен:<?php echo $item->id?></p></div>
    <a style="padding-left: 20px;" href="/../lesson5/index.php?ctrl=Admin&act=Upd&id=<?php echo $item->id?>">Изменить новость</a>
    <a style="padding-left: 20px;" href="/../lesson5/index.php?ctrl=Admin&act=Del&id=<?php echo $item->id?>">Удалить новость</a>

<?php endforeach; ?>
<h2><a href="/../lesson5/index.php">Выйти из панели администратора</a></h2>