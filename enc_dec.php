<?php
echo "                  __              
.-----..-----..----..--|  |.-----..----.
|  -__||     ||  __||  _  ||  -__||  __|
|_____||__|__||____||_____||_____||____|
\n";
echo "1. encrypt";
echo "2. decrypt\n";
echo "Input mode : ";
$pil = trim(fgets(STDIN));
if( $pil == 1){
	echo "Text : ";
	$enc = trim(fgets(STDIN));
	$has = base64_encode($enc);
	echo "Hasil Tod : $has\n";
}
else if( $pil == 2){
	echo "Text : ";
	$encc = trim(fgets(STDIN));
	$hass = base64_decode($encc);
	echo "Hasil Tod : $hass\n";
}
?>
