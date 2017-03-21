<?php
$var = $_GET['var'];
foreach (glob('photo_max/*') as $img) {
    $img_name = end(explode("/", $img));
    if ($var == $img_name) {
        echo '<img src="'.$img.'" /><br>';
    }
}
?>

<a href="view_image.php">Вернуться к списку изображений</a><br>
<a href="index.php">Загрузить еще изображения</a><br>
