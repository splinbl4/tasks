<p>Список изображений:</p>

<?php
foreach (glob('photo_min/*') as $img) {
    $img_name = end(explode("/", $img));
    echo '<a href="image_view.php?var='.$img_name.'"><img src="'.$img.'" /></a><br><br>';
}
?>

<a href="index.php">Загрузить еще изображения</a><br>
