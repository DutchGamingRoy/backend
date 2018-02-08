<html>
<head></head>
<body>
<p>
    <?php
    $var = "\$var";
    echo <<<TEKST
            <h1>Verschil tussen globale en lokalen variabelen</h1>
            <br>Een globale variable kan vanuit overal worden aangesproken,
            <br>waarintegen een lokale variabel alleen in de functie waarin deze is aangemaakt
            <br>
            <br><h4>Voorbeeld globale variabel:</h4>
            <br>\$var = "";
            <br>function myfunction() {
            <br>    echo "\$var";
            <br>}
            <br>\$var kan nu vanuit alle funties worden aangesproken.
            <br>
            <br><h4>Voorbeeld lokale variabel:</h4>
            <br>functions myfunction() {
            <br>    \$var = "";
            <br>    echo "\$var";
            <br>}
            <br>\$var is in dit geval alleen aantespreken in de functie "myfunction();"
TEKST;
    ?>
</p>
</body>
</html>
