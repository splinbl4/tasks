<p>Список изображений:</p>

<?php
require_once 'db.php';
define('ROOT', dirname(__FILE__));
//
//foreach (glob('photo_min/*') as $img) {
//    $img_name = end(explode("/", $img));
//    echo '<a href="image_view.php?var='.$img_name.'"><img src="'.$img.'" /></a><br><br>';
//}

$db = getConnection();

$sql = 'SELECT id, name, type FROM photo ORDER BY click DESC';

$result = $db->prepare($sql);
$result->setFetchMode(PDO::FETCH_ASSOC);

$result->execute();

$photoList = [];

$i = 0;
while ($row = $result->fetch()) {
    $photoList[$i]['id'] = $row['id'];
    $photoList[$i]['name'] = $row['name'];
    $photoList[$i]['type'] = $row['type'];
    $i++;
}


foreach ($photoList as $item) {
    echo '<a href="image_view.php?var='.$item['name']. '.' .$item['type'].'"><img src="photo_min/'.$item['name']. '.' .$item['type'].'" /></a><br><br>';
}

?>

<a href="index.php">Загрузить еще изображения</a><br>
