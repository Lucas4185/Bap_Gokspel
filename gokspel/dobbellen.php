<?php
function dobbelsteen($worp){
  $image = imagecreate(200, 200) or die("GD image werkt niet");
  $background_color = imagecolorallocate($image, 0, 0, 0);
  $color = imagecolorallocate($image, 255, 255, 255);

  imagefilledellipse($image, 50, 50, 40, 40, $color);
  imagefilledellipse($image, 150, 50, 40, 40, $color);
  imagefilledellipse($image, 50, 100, 40, 40, $color);
  imagefilledellipse($image, 50, 150, 40, 40, $color);
  imagefilledellipse($image, 150, 100, 40, 40, $color);

  imagefilledellipse($image, 150, 150, 40, 40, $color);

  $image2 = imagecreate(200, 200) or die("GD image werkt niet");
  $background_color = imagecolorallocate($image2, 0, 0, 0);
  $color = imagecolorallocate($image2, 255, 255, 255);


  imagefilledellipse($image2, 50, 50, 40, 40, $color);
  imagefilledellipse($image2, 150, 150, 40, 40, $color);

  $image3 = imagecreate(200, 200) or die("GD image werkt niet");
  $background_color = imagecolorallocate($image3, 0, 0, 0);
  $color = imagecolorallocate($image3, 255, 255, 255);

  imagefilledellipse($image3, 100, 100, 40, 40, $color);



    $image4 = imagecreate(200, 200) or die("GD image werkt niet");
    $background_color = imagecolorallocate($image4, 0, 0, 0);
    $color = imagecolorallocate($image4, 255, 255, 255);

    imagefilledellipse($image4, 50, 50, 40, 40, $color);
    imagefilledellipse($image4, 100, 100, 40, 40, $color);
    imagefilledellipse($image4, 150, 150, 40, 40, $color);


    $image5 = imagecreate(200, 200) or die("GD image werkt niet");
    $background_color = imagecolorallocate($image5, 0, 0, 0);
    $color = imagecolorallocate($image5, 255, 255, 255);

    imagefilledellipse($image5, 50, 50, 40, 40, $color);
    imagefilledellipse($image5, 100, 100, 40, 40, $color);
    imagefilledellipse($image5, 150, 50, 40, 40, $color);
    imagefilledellipse($image5, 150, 150, 40, 40, $color);
    imagefilledellipse($image5, 50, 150, 40, 40, $color);

    $image6 = imagecreate(200, 200) or die("GD image werkt niet");
    $background_color = imagecolorallocate($image6, 0, 0, 0);
    $color = imagecolorallocate($image6, 255, 255, 255);

    imagefilledellipse($image6, 50, 50, 40, 40, $color);
    imagefilledellipse($image6, 150, 150, 40, 40, $color);
    imagefilledellipse($image6, 150, 50, 40, 40, $color);
    imagefilledellipse($image6, 50, 150, 40, 40, $color);

    $image7 = imagecreate(200, 200) or die("GD image werkt niet");
    $background_color = imagecolorallocate($image7, 0, 0, 0);
    $color = imagecolorallocate($image7, 255, 255, 255);


    imagefilledellipse($image7, 100, 100, 40, 40, $color);


    imagepng($image7,"dobbelsteen1.jpg");



if($worp==2 OR $worp==3){
  if($worp==2){
  imagepng($image2,"dobbelsteen2.jpg");
}
if($worp==3){
  imagepng($image4,"dobbelsteen3.jpg");
}
}
if($worp==4 OR $worp==5 OR $worp==6){
  if($worp==4){
imagepng($image5,"dobbelsteen4.jpg");
  }
  if($worp==5){
imagepng($image6,"dobbelsteen5.jpg");
  }
  if($worp==6){
imagepng($image7,"dobbelsteen6.jpg");
  }
}

}

$worp = rand(1 , 6);
$worp2 = rand(1 , 6);
$worp3 = rand(1 , 6);
$worp4 = rand(1 , 6);
$worp5 = rand(1 , 6);
$worp6 = rand(1 , 6);
dobbelsteen($worp);
print "<img src=dobbelsteen$worp.jpg?".date("U").">&nbsp";
print "<img src=dobbelsteen$worp2.jpg?".date("U").">&nbsp";
print "<img src=dobbelsteen$worp3.jpg?".date("U").">&nbsp";
print "<img src=dobbelsteen$worp4.jpg?".date("U").">&nbsp";
print "<img src=dobbelsteen$worp5.jpg?".date("U").">&nbsp";
print "<img src=dobbelsteen$worp6.jpg?".date("U").">&nbsp";

?>
