<?php
function solarizeImage($imagePath, $solarizeThreshold) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->solarizeImage($solarizeThreshold * \Imagick::getQuantum());
    header("Content-Type: image/jpg");
    echo $imagick->getImageBlob();
}
solarizeImage('output_images/1.jpg', 1000);
?>