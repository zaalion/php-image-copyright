<?php

/////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////
//--- Reza Salehi
//--- zaalion@yahoo.com 
//--- free for non-commercial use.
/////////////////////////////////////////////////////////////////////////////////////	
/////////////////////////////////////////////////////////////////////////////////////

	class insert_text_to_image		
		{		
		function insert_text_to_image($imageSource, $text, $x_position, $y_position, $colorR, $colorG, $colorB, $font)
			{
			$this->source=$imageSource;
			$this->text=$text;
			$this->x_position=$x_position;
			$this->y_position=$y_position;
			$this->colorR=$colorR;
			$this->colorG=$colorG;
			$this->colorB=$colorB;
			$this->x=0;
			$this->y=0;
			$this->font=$font;
			}
		function insert()
			{
			header ("Content-type: image/jpeg");
			$image=imagecreatefromjpeg($this->source);
			$this->x=imagesx($image);
			$this->y=imagesy($image);
			$colx = imagecolorallocate ($image,(int)$this->colorR,(int)$this->colorG,(int)$this->colorB);
			$col = imagecolorallocate ($image,(int)$this->colorR,(int)$this->colorG,(int)$this->colorB);
			
			if(!$image)
				die("this image does not exist ! try a currect filename as a jpeg file .");
			if($this->x_position<0 || $this->x_position>$this->x || $this->y_position<0 || $this->y_position>$this->y)
				die("the x_position or y_position values are not currect. they must be smaller than image dimentions . ");
				
			imagestring ($image,$this->font,$this->x_position,$this->y_position,$this->text,$col);
			imagejpeg ($image, null, 100);
			}
		}
?>
