<html>
    <head>

    </head>
    <body>
        <h1>Onze groep</h1>
        <?php
            /*$leerlingnummer = ["0278316"=>"0278316", "0300049"=>"0300049", "0301342"=>"0301342", "0299119"=>"0299119", "0300456"=>"0300456", "299208"=>"299208", "300275"=>"300275"];*/
            $voornaam = ["0278316"=>"Damion", "0300049"=>"Roy", "0301342"=>"Kjell", "0299119"=>"Marijn", "0300456"=>"Luuk", "299208"=>"Hasan", "300275"=>"Milenko"];
            $achternaam = ["0278316"=>"Van der Veen", "0300049"=>"Weghorst", "0301342"=>"Zandstra", "0299119"=>"Welmerink", "0300456"=>"Vaal", "299208"=>"Usta", "300275"=>"Zivkovic"];
            $woonplaats = ["0278316"=>"Overdinkel", "0300049"=>"Hengelo", "0301342"=>"Enschede", "0299119"=>"Neede", "0300456"=>"Hengelo", "299208"=>"Enschede", "300275"=>"Hengelo"];
            $leeftijd = ["0278316"=>"19", "0300049"=>"16", "0301342"=>"16,7", "0299119"=>"17", "0300456"=>"17", "299208"=>"16", "300275"=>"16"];

            $rndm = rand(0,6);
            if ($rndm == 0) {
                $key = "0278316";
            } else if ($rndm == 1) {
                $key = "0300049";
            } else if ($rndm == 2) {
                $key = "0301342";
            } else if ($rndm == 3) {
                $key = "0299119";
            } else if ($rndm == 4) {
                $key = "0300456";
            } else if ($rndm == 5) {
                $key = "299208";
            } else if ($rndm == 6) {
                $key = "300275";
            }

            echo("Leerling nummer: $key<br>");
            echo("Voornaam: $voornaam[$key]<br>");
            echo("Achternaam: $achternaam[$key]<br>");
            echo("Woonplaats: $woonplaats[$key]<br>");
            echo("Leeftijd: $leeftijd[$key]<br>");
        ?>
        <br>
        <input type="button" value="Random Groepslid" onClick="window.location.reload()">
    </body>
</html>