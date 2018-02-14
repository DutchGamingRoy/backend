<h3>php lab 02</h3>
<?php
    //Karim
    $naam = 'Karim';
    $nederlands = 8.5;
    $engels = 7.7;
    $rekenen = 6.7;
    $programmeren = 8.5;
    $databases = 9.4;

    $naam2 = 'Sophie';
    $nederlands2 = 8.9;
    $engels2 = 8.7;
    $rekenen2 = 9.7;
    $programmeren2 = 9.5;
    $databases2 = 9.2;

    $totaal = $nederlands + $engels + $rekenen + $programmeren + $databases;
    $totaal2 = $nederlands2 + $engels2 + $rekenen2 + $programmeren2 + $databases2;

    $gemiddeld = $totaal/5;
    $gemiddeld2 = $totaal2/5;

    $groepsgemiddeldentotaal = $gemiddeld + $gemiddeld2;
    $groepsgemiddelde = round( $groepsgemiddeldentotaal/2 ,$presicion = 1);

echo "<table border ='1'>
    <caption>
    <strong>Rapport</strong>
    </caption>
    <thead>
        <tr><th>Naam</th><th>Nederlands</th><th>Engels</th><th>Rekenen</th><th>Programmeren</th><th>Databases</th><th>Gemiddeld</th></tr>
    </thead>
    <tbody>
    <tr>
        <td>$naam</td>
        <td>$nederlands</td>
        <td>$engels</td>    
        <td>$rekenen</td>    
        <td>$programmeren</td>    
        <td>$databases</td>
        <td>$gemiddeld</td>
     </tr>
        
    <tr>
        <td>$naam2</td>
        <td>$nederlands2</td>
        <td>$engels2</td>    
        <td>$rekenen2</td>    
        <td>$programmeren2</td>    
        <td>$databases2</td>
        <td>$gemiddeld2</td>
    </tr>
            
    </tbody>

    <tfoot>
        <tr><td colspan = '6'>Groep gemiddeld</td>
        <td>$groepsgemiddelde</td></tr>
    </tfoot>
    </table>";
?>