<body>
<form method="post" action>
    <input type="submit" value="gooien" name="1">
    <?php
    $dobbel = array (rand(1,6), rand(1,6), rand(1,6), rand(1,6), rand(1,6));
    $antwoord = array_sum($dobbel);
    echo "<br>dobbelsteen 1: " . $dobbel[0] .
        "<br>dobbelsteen 2: " . $dobbel[1].
        "<br>dobbelsteen 3: " . $dobbel[2].
        "<br>dobbelsteen 4:  " . $dobbel[3].
        "<br>dobbelsteen 5:  " . $dobbel[4].
        "<br> totaal $antwoord";

    ?>
</form>
</body>
</html>