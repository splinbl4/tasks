<?php
require_once 'db.php';
define('ROOT', dirname(__FILE__));

$filename = $_GET['var'];

if (isset($filename)) {
    $extension = array_shift(explode(".", $filename));
    $db = getConnection();

    $sql1 = 'UPDATE photo SET click = click + 1 WHERE name = :name';
    $result1 = $db->prepare($sql1);
    $result1->bindParam(':name', $extension, PDO::PARAM_STR);

    $result1->execute();

    foreach (glob('photo_max/*') as $img) {
        $img_name = end(explode("/", $img));
        if ($filename == $img_name) {
            echo '<img src="'.$img.'" /><br>';
        }
    }

    $sql = 'SELECT click FROM photo WHERE name = :name';
    $result = $db->prepare($sql);
    $result->bindParam(':name', $extension, PDO::PARAM_STR);

    $result->execute();

    $photoList = [];

    $i = 0;
    while ($row = $result->fetch()) {
        $photoList[$i]['click'] = $row['click'];
        $i++;
    }
    foreach ($photoList as $item) {
        echo 'Количество просмотров: ' . $item['click'] . '<br><br>';
    }
}
?>

<a href="image_list.php">Вернуться к списку изображений</a><br>
<a href="index.php">Загрузить еще изображения</a><br>
