<HTML>
<HEAD>

    <TITLE>getal</TITLE>

</HEAD>

<BODY>

<?php
$getal1 = rand("1","1000");
$getal2 = rand("1","1000");

$a = ( $getal1+$getal2 );
$b = ( $getal1-$getal2 );
$c = ( $getal1*$getal2 );
$d = ( $getal1/$getal2 );
$e = ( $getal1%$getal2 );

echo "getal1 = $getal1<br>";
echo "getal2 = $getal2<br>";

echo  "<br>$getal1 + $getal2 = $a <br>";
echo  "$getal1 - $getal2 = $b <br>";
echo  "$getal1 * $getal2 = $c <br>";
echo  "$getal1 / $getal2 = $d <br>";
echo  "$getal1 % $getal2 = $e <br>";

?>
</BODY>
</HTML>