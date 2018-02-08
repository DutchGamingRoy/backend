<html>
<head>

</head>
<body>

<?php
$kleur = [
    'harten',
    'klaveren',
    'ruiten',
    'schoppen',
];
$waarde = [
    '_1.svg',
    '_2.svg',
    '_3.svg',
    '_4.svg',
    '_5.svg',
    '_6.svg',
    '_7.svg',
    '_8.svg',
    '_9.svg',
    '_10.svg',
    '_boer.svg',
    '_heer.svg',
    '_vrouw.svg'
];

$rndm = rand(0,3);
$rndm1 = rand(0,12);
echo("<img src='kaarten/$kleur[$rndm]$waarde[$rndm1]'>")
?>




</body>
</html>