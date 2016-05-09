<?php require_once __DIR__ . '/../../autoload.php' ?>
<form name="editor" method="post" enctype="multipart/form-data">
    <h1><textarea style="min-width: 100%" name="editor1"><?php echo $item->title?></textarea></h1>
    <h3><textarea style="min-width: 100%" name="editor2"><?php echo $item->text?></textarea></h3>
</form>
<a href="/lesson5/index.php">Вернуться ко всем новостям</a>
<?php
$id = $item->id;
$editor_data1 = $_POST['editor1'];
$editor_data2 = $_POST['editor2'];
if (!empty($editor_data1) AND $editor_data1  !== $item->title OR !empty($editor_data2) AND $editor_data2  !== $item->text)
{
    $data = ['title' => $editor_data1, 'text' => $editor_data2 ];
    $ins = new NewsModel();
    $ins->update($data,$id);
    header("Refresh:0; url=index.php");
}
elseif (!empty($editor_data1))
    echo 'Динахуй пидр бля'

?>

<script>
    CKEDITOR.replace( 'editor1' );
    CKEDITOR.replace( 'editor2' );
    CKEDITOR.config.autoParagraph = false;
</script>
