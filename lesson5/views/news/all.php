
<h2><a href="/../lesson5/admin.php">Админ панель</a></h2>
<br>
<?php foreach ($items as $item): ?>
    <h3><?php echo $item->title?></h3>

   <a href="/../lesson5/index.php?Ctrl=News&act=One&id=<?php echo $item->id?>">Прочитать новость целиком</a>

<?php endforeach; ?>

