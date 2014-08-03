<?php

	if (!file_exists('Images')) {
		mkdir('Images');
	}

	$scanImages = scandir('Images');

	foreach ($scanImages as $key => $value) { 
		if ($value != '.' && $value != '..') {
			// echo $value;
		}
	}

	// // Загрузка штампа и фото, для которого применяется водяной знак (называется штамп или печать)
	// $stamp = imagecreatefrompng('stamp.png');
	// $im = imagecreatefromjpeg('photo.jpeg');

	// // Установка полей для штампа и получение высоты/ширины штампа
	// $marge_right = 10;
	// $marge_bottom = 10;
	// $sx = imagesx($stamp);
	// $sy = imagesy($stamp);

	// // Копирование изображения штампа на фотографию с помощью смещения края
	// // и ширины фотографии для расчета позиционирования штампа. 
	// imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));

	// // Вывод и освобождение памяти
	// header('Content-type: image/png');
	// imagepng($im);
	// imagedestroy($im);

	// $stamp = $scanStamp[2];

	// $Stamp = imagecreatefrompng('Stamp/' . $stamp);
	// $img = imagecreatefromjpeg('Images/snake.jpg');

	// $sx = imagesx($Stamp);
	// $sy = imagesy($Stamp);

	// imagecopy($img, $Stamp, imagesx($img) - $sx, imagesy($img) - $sy, 0, 0, imagesx($Stamp), imagesy($Stamp));
	// // imagecopy(dst_im, src_im, dst_x, dst_y, src_x, src_y, src_w, src_h)
	// // header('Content-type: image/png'); // вывод картинки 
	// if (!file_exists('Stamped')) {
	// 	mkdir('Stamped');
	// }
	// imagepng($img, 'Stamped/test1.png');
	// imagedestroy($img);

?>
