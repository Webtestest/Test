<?php

	if (!file_exists('Stamp')) {
		mkdir('Stamp');
	}

	$scanStamp = scandir('Stamp');

	if (count($scanStamp) > 3) {
		foreach ($scanStamp as $value) {
			if ($value != '.' || $value != '..' || $value != 'Stamp.png') {
				unlink('Stamp/' . $value);	
			}
		}
	}

	$formatList = array('.png');
 	
 	if (!empty($_FILES["stamp"])) {
		$filePos = mb_strrpos($_FILES["stamp"]["name"], ".");
		$fileSubPos = mb_substr($_FILES["stamp"]["name"], $filePos);
		// echo $_FILES["stamp"]["name"];

		if (!(in_array(mb_strtolower($fileSubPos), $formatList))) {
			$errorText = 'Такой формат запрещен, загрузите файл с расширением .png';
		} else {
			$uploaddir = 'Stamp/';
			$uploadfile = $uploaddir . 'Stamp' . mb_strtolower($fileSubPos);

			if (move_uploaded_file($_FILES['stamp']['tmp_name'], $uploadfile)) {
				$errorText = 'File is valid, and was successfully uploaded.';
			} else {
				$errorText = 'File uploading failed.';
			}
		}

	}

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
