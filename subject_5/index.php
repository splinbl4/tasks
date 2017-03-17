<?php
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

if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    $uploaddirmax = 'photo_max/';
    $uploaddirmin = 'photo_min/';
    $filename = $file['name'];
    $uploadfilemax = $uploaddirmax . basename($filename);
    if (preg_match('/jpg/', $filename)
        or preg_match('/png/', $filename)
        or preg_match('/gif/', $filename)
        or preg_match('/jpeg/', $filename)) {
        if (preg_match('/jpg/', $file['type'])
            or preg_match('/png/', $file['type'])
            or preg_match('/gif/', $file['type'])
            or preg_match('/jpeg/', $file['type'])) {
            $filemax = move_uploaded_file($file['tmp_name'], $uploadfilemax);
        }
        if (isset($filemax)) {
            $uploadfilemin = $uploaddirmin . basename($filename);
            copy($uploadfilemax, $uploadfilemin);
            imageresize($uploadfilemin, $uploadfilemax, 200, 200, 75);
        }
    } else {
        echo 'Неверный формат файла';
    }
}
?>

<form method="POST" enctype = "multipart/form-data">
    <label>Загрузить фото:</label><br>
    <input name="file" type="file">
    <button name="submit" type="submit">Загрузить</button><br><br>
</form>