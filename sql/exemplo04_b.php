<?php 

header("Content-type: image/jpeg");

$file = "wallpaper.jpg";

//list($old_width, $old_height) = getimagesize($file);

in_array(needle, haystack)

$data = getimagesize($file);

$new_width = $data[1];
$new_height = $data[1];

$dst_w = ($data[0]-$data[1])/2;

$new_image = imagecreatetruecolor($new_width, $new_height);

$old_image = imagecreatefromjpeg($file);


imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

//imagecopyresampled(dst_image, src_image, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)

imagecopy($new_image, $old_image, 0, 0, $dst_w, 0, $old_width, $old_height);

//imagejpeg($new_image);
imagejpeg($new_image, "image-".date("Y-m-d").".jpg");

imagedestroy($old_image);
imagedestroy($new_image);

 ?>