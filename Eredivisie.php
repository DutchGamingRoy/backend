<!DOCTYPE html>
<html>
<body>

    <?php



    echo'<img src="http://voetbalstats.nl/clublogo/clublogo40.png" height="200"';
    echo"<br>";
    echo'<img src="https://www.heracles.nl/Common/images/heracles-logo.png" height="200"';
    echo "<br />";
    $stand = ["17"];$stand = ["12" , "15"];
    echo "<br />";
    $naam = ["Fc twente", "Heracles Almelo"];
    $stad = ["Enschede" , "Almelo"];
    $gespeeld = ["22" , "22"];
    $gewonnen = ["4" , "6"];
    $gelijk = ["4" , "6"];
    $verloren = ["14" , "10"];





    echo("stand: $stand[0]<br>");
    echo("naam: $naam[0]<br>");
    echo("stad: $stad[0]<br>");
    echo("gespeeld: $gespeeld[0]<br>");
    echo("gewonnen: $gewonnen[0]<br>");
    echo("gelijk: $gelijk[0]<br>");
    echo("verloren: $verloren[0]<br>");




    echo "<br />";
    echo("stand: $stand[1]<br>");
    echo("naam: $naam[1]<br>");
    echo("stad: $stad[1]<br>");
    echo("gespeeld: $gespeeld[1]<br>");
    echo("gewonnen: $gewonnen[1]<br>");
    echo("gelijk: $gelijk[1]<br>");
    echo("verloren: $verloren[1]<br>");

    ?>

</body>
</html>