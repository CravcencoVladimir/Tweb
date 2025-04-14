<?php
$images = glob($_SERVER['C:\xampp\htdocs\photo buddism'] . '/photo buddism/buddha.jpg');

if (empty($images)) {
    echo 'no-image.jpg';
    exit;
}

$index = array_rand($images);

echo str_replace($_SERVER['C:\xampp\htdocs\photo buddism'], '', $images[$index]);
?>
