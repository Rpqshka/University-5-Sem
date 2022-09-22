<?php
$ar = htmlspecialchars($_GET["num"]);
// 150x100
$im = imagecreatetruecolor(1500,1000);
// Определяем красный цвет
$red = imagecolorallocate($im,0xCC,0x00,0x00);
// Определяем белый цвет
$white = imagecolorallocate($im,0xFF,0xFF,0xFF);
// Делаем фон белым (по-умолчанию черный)
imagefill($im,1,1,$white);
// Рисуем круг красного цвета
imageellipse($im,75*$ar,50*$ar,80*$ar,80*$ar,$red);
// Выводим изображение
// PNG изображение
header('Content-type: image/png');
imagepng($im);
?>