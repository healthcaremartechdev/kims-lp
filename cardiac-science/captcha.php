<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Always generate a new CAPTCHA on each request
$_SESSION['captcha'] = substr(str_shuffle("ABCDEFGHJKLMNPRSTUVWXYZ23456789"), 0, 5);
$captcha_code = $_SESSION['captcha'];

// Create CAPTCHA image
$image = imagecreatetruecolor(150, 50);
$bg_color = imagecolorallocate($image, 255, 255, 255); // White background
$text_color = imagecolorallocate($image, 0, 0, 0); // Black text
$line_color = imagecolorallocate($image, 100, 100, 100); // Gray lines

imagefilledrectangle($image, 0, 0, 150, 50, $bg_color);

// Add random lines for noise
for ($i = 0; $i < 5; $i++) {
    imageline($image, rand(0, 150), rand(0, 50), rand(0, 150), rand(0, 50), $line_color);
}

// Add the CAPTCHA text
imagettftext($image, 22, rand(-10, 10), 25, 35, $text_color, __DIR__ . '/Arial.ttf', $captcha_code);

// Output the image
header("Content-Type: image/png");
imagepng($image);
imagedestroy($image);
?>
