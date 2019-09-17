<?php
echo "Vul een getal in\r\n";
$num = readline();
if (($num % 2) == 1) {
	echo $num." is oneven";
}
if (($num % 2) == 0) {
	echo $num." is even";
}
?>