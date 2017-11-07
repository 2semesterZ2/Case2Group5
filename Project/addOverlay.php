<?php
// Changed by Group 5, Case 2 (Petra, Sara Fee, Thomas, Viktor)
// Based on Brors "polaroid" example
// which was based on Doyles watermark example chap 17

//Note: Pic needs to be replaced by a variable, to make UGC possible
$myImage = imagecreatefromjpeg( "Giraffe_ZooDresden.jpg" );
$overlay = imagecreatefrompng( "OverlayPictures.png" );
$myColor = imagecolorallocate( $myImage, 255, 255, 255 );

$destWidth = imagesx( $myImage );
$destHeight = imagesy( $myImage );
//scale the Overlay to the width of the original image and 1/10 of the height
$overlay = imagescale($overlay, $destWidth, $destHeight/10);

//Size of the Overlay
$srcWidth = imagesx( $overlay );
$srcHeight = imagesy( $overlay );

// next 7 lines to crop the image
// are from  http://php.net/manual/en/function.imagecrop.php
$crop_measure = min($destHeight, $destWidth);
$offsetX= ($destWidth-$crop_measure)/2;
$offsetY= ($destHeight-$crop_measure)/2;
$to_crop_array = array('x' => (0+$offsetX) , 'y' => (0+$offsetY), 'width' => $crop_measure, 'height'=> $crop_measure);
$myImage = imagecrop($myImage, $to_crop_array);
$destWidth = imagesx( $myImage );
$destHeight = imagesy( $myImage );


//Positions the overlay down
$destX = 0;
$destY = ($destHeight - $srcHeight);

//merge the image with the overlay
imagecopymerge( $myImage, $overlay, $destX, $destY, 0, 0, $srcWidth, $srcHeight, 79 );

//The lower part need to be changed to be changed as well to make it work on our site and safe the picture on the server

// This is to make browser believe an image is coming
header( "Content-type: image/jpeg" );
// This sends the image to the browser 
// (it could have been saved on the server instead)
imagejpeg( $myImage );

// Cleaning up
imagedestroy( $myImage );
imagedestroy( $overlay );



?>