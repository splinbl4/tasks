<?php
require_once 'db.php';
define('ROOT', dirname(__FILE__));

function imageresize($outfile,$infile,$neww,$newh,$quality) {
    $im=imagecreatefromjpeg($infile);
    $k1=$neww/imagesx($im);
    $k2=$newh/imagesy($im);
    $k=$k1>$k2?$k2:$k1;

    $w=intval(imagesx($im)*$k);
    $h=intval(imagesy($im)*$k);

    $im1=imagecreatetruecolor($w,$h);
    imagecopyresampled($im1,$im,0,0,0,0,$w,$h,imagesx($im),imagesy($im));

    imagejpeg($im1,$outfile,$quality);
    imagedestroy($im);
    imagedestroy($im1);
}


$file = $_FILES['file'];
$filename = $file['name'];

$whitelist = ['gif','jpg', 'png', 'jpeg'];
$extension = strtolower(end(explode(".", $filename)));
$newname = uniqid();

$uploaddirmax = 'photo_max/';
$uploaddirmin = 'photo_min/';

$uploadfilemax = $uploaddirmax . $newname .'.'. $extension;
$uploadfilemin = $uploaddirmin . $newname .'.'. $extension;

if (in_array($extension, $whitelist)) {
    if (move_uploaded_file($file['tmp_name'], $uploadfilemax)) {
        $db = getConnection();

        $sql = 'INSERT INTO photo (name, type) VALUES (:name, :type)';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $newname, PDO::PARAM_STR);
        $result->bindParam(':type', $extension, PDO::PARAM_STR);

        $result->execute();


        copy($uploadfilemax, $uploadfilemin);
        imageresize($uploadfilemin, $uploadfilemax, 200, 200, 75);
        echo 'Файл ' . $filename . ' успешно загружен!<br>';
    }
} elseif ($filename == '') {
    echo 'Выберите файл';
} else {
    echo 'Недопустимый тип файла.';
}
?>

    <form method="POST" enctype = "multipart/form-data">
        <label>Загрузить фото:</label><br>
        <input name="file" type="file">
        <button name="submit" type="submit">Загрузить</button><br><br>
    </form>
<?php
if (glob('photo_min/*')) {
    echo '<a href="image_list.php">Просмотреть изображения</a><br>';
}