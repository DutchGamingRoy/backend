<!doctype>
<HTML>
<HEAD>
    <TITLE>This is me</TITLE>

</HEAD>

<BODY>
<?php

$getal1 = rand("1","1000");
$getal2 = rand("1","1000");

if( $getal1<$getal2 ) {
    $x = 'yes';
} else {
    $x = 'no';
}

if( $getal1>$getal2 ) {
    $z = 'yes';
} else {
    $z = 'no';
}

if( $getal1==$getal2 ) {
    $c = 'yes';
} else {
    $c = 'no';
}

if( $getal1===$getal2 ) {
    $v = 'yes';
} else {
    $v = 'no';
}

if( $getal1>=$getal2 ) {
    $b = 'yes';
} else {
    $b = 'no';
}

if( $getal1<=$getal2 ) {
    $n = 'yes';
} else {
    $n = 'no';
}

if( $getal1!=$getal2 ) {
    $m = 'yes';
} else {
    $m = 'no';
}


echo "$getal1 < $getal2 = $x <br>";
echo "$getal1 > $getal2 = $z <br>";
echo "$getal1 == $getal2 = $c <br>";
echo "$getal1 === $getal2 = $v <br>";
echo "$getal1 >= $getal2 = $b <br>";
echo "$getal1 <= $getal2 = $n <br>";
echo "$getal1 != $getal2 = $m <br>";
?>
</BODY>

</HTML>