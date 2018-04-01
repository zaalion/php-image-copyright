<?php

/////////////////////////////////////////////
//---- this class gets a jpeg file and places a string in desired place of 
//---- that image. font and color of this text can be determind as input parameters.
/////////////////////////////////////////////

	include("insert_text_to_image.class.php");
	
	$imagename="test.jpg";// place a jpeg file in classes directory and enter its name here.
	$string="This text was added to this image dynamicaly!";
	$colorr=255;
	$colorg=255;
	$colorb=255;
	$x_pos=100;
	$y_pos=150;
	$font=4;// for font enter a number between 1 to 5.
	
	//---- insert_text_to_image(image file addess ans name, the text which must be placed in image, x of text place
	//----                , y of text place, text color (r), text color (g), text color (b), text font "a numbe between 1 to 5" )
	
	$ins=new insert_text_to_image($imagename, $string, $x_pos, $y_pos, $colorr, $colorg, $colorb, $font);
	$ins->insert();
?>