<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Uploading a Photo</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>


<?php

if ( isset( $_POST["sendPhoto"] ) ) {
    processForm();
} else {
  displayForm();
}
      

function countPictures() {      
    $f = new FilesystemIterator("photos/", FilesystemIterator::SKIP_DOTS);
    return iterator_count($f);      
}
      

function processForm() {
    $nbrOfPics = countPictures();
    $newFileName = $nbrOfPics + 1 .".jpg";
  if ( isset( $_FILES["photo"] ) and $_FILES["photo"]["error"] == UPLOAD_ERR_OK ) {
    if ( $_FILES["photo"]["type"] != "image/jpeg" ) {
      echo "<p>JPEG photos only, thanks!</p>";
        } elseif ( !move_uploaded_file( $_FILES["photo"]["tmp_name"], "photos/" . $newFileName) ) { 
              echo "<p>Sorry, there was a problem uploading that photo.</p>" . $_FILES["photo"]["error"] ;
    } else {
        addOverlay($newFileName);
        displayThanks($newFileName);
    }
  } else {
    switch( $_FILES["photo"]["error"] ) {
      case UPLOAD_ERR_INI_SIZE:
        $message = "The photo is larger than the server allows.";
        break;
      case UPLOAD_ERR_FORM_SIZE:
        $message = "The photo is larger than the script allows.";
        break;
      case UPLOAD_ERR_NO_FILE:
        $message = "No file was uploaded. Make sure you choose a file to upload.";
        break;
      default:
        $message = "Please contact your server administrator for help.";
    }
    echo "<p>Sorry, there was a problem uploading that photo. $message</p>";
  }
}

function displayForm() {
?>
    <h3>Uploading a Photo</h3>

    <p>Please enter your name and choose a photo to upload, then click Send Photo.</p>

    <form action="uploadAddOverlay.php" method="post" enctype="multipart/form-data">
      <div style="width: 30em;">
        <input type="hidden" name="MAX_FILE_SIZE" value="500000" />

        <label for="visitorName">Your name</label>
        <input type="text" name="visitorName" id="visitorName" value="" />

        <label for="photo">Your photo</label>
        <input type="file" name="photo" id="photo" value="" />

        <div style="clear: both;">
          <input type="submit" name="sendPhoto" value="Send Photo" />
        </div>

      </div>
    </form>
<?php
}

function displayThanks(&$newFileName) {
?>
    <h1>Thank You</h1>
    <p>Thanks for uploading your photo<?php if ( $_POST["visitorName"] ) echo ", " . $_POST["visitorName"] ?>!</p>
    <p>Here's your photo:</p>

    <p><img src="photos/<?php echo $newFileName ?>" alt="Photo" /></p>
      
      
    <a href="index.php">Back to first screen</a>
<?php
}

      
function addOverlay(&$newFileName) {  
// Changed by Group 5, Case 2 (Petra, Sara Fee, Thomas, Viktor)
// Based on Brors "polaroid" example
// which was based on Doyles watermark example chap 17
    
//Get the image the user has uploaded    
    $myImage = imagecreatefromjpeg( "photos/" . $newFileName);
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
    //save it on the server
    imagejpeg( $myImage,"photos/".$newFileName);

}
      
?>      
     

  </body>
</html>
