<?php
//Studentnaam: Stefan Meijer
//Klas: INF1C
//Studentnummer: 5033454

//Opgave 2 Waterrimpeling


//A) Ontwikkel een routine/functie die de straal berekent van de rimepling bij een gegeven snelheid en tijd
function berekenStraal (int $snelheid, int $tijd) {
    //Snelheid in cm/s
    //Tijd in Sec
    //Straal in M

    $snelheid = $snelheid / 100; //Snelheid van cm/s naar m/s
    $diameter = $snelheid * $tijd; //Diameter = 2x zo groot als straal
    $straal = $diameter / 2;
    
    return $straal;
}
echo 'De straal is: ' . berekenStraal(120, 10) . ' meter<br>'; //Wat is van de straal, uitgedrukt in meters, van de rimpeling na 10 seconden?

//B) Ontwikkel een routine/functie die de tijd berekent bij een gegeven snelheid en straal.
function berekenTijd1 (int $snelheid, int $straal) {
    //Snelheid in cm/s
    //Tijd in Sec
    //Straal in M

    $snelheid = $snelheid / 100; //Snelheid van cm/s naar m/s
    $diameter = $straal * 2; //Diameter = 2x zo groot als straal
    $seconden = $diameter / $snelheid;
    echo 'De tijd is: ' . $seconden . ' seconden<br>';
}
berekenTijd1(120, 3); //Hoeveel seconden zijn verstreken sinds de steen in het water tericht is gekomen, als de straal van de rimeling 3 meter is?

//C) Ontwikkel een routine/snelheid die de oppervlakte van de rimpeling berekent bij een gegeven tijd en snelheid.
function berekenOppervlakte (int $tijd, int $snelheid) {
    //Tijd in Sec
    //Snelheid in cm/s

    $straal = berekenStraal($tijd, $snelheid); //Bereken de straal
    $straal = pow($straal, 2);
    $oppervlakte = pi() * $straal;
    echo 'Oppervlakte is: ' . $oppervlakte . ' m2<br>';
}
berekenOppervlakte(8, 120);

//D) Ontwikkel een routine/functie die de tijd berekent bij een gegeven oppervlakte van de rimpeling en snelheid
function berekenTijd2 (int $oppervlakte, int $snelheid) {
    //Oppervlakte in m2
    //Snelheid in cm/s

    $snelheid = $snelheid / 100; //Snelheid van cm/s naar m/s
    $tijd = $oppervlakte / $snelheid;
    echo 'De tijd is: ' . $tijd . ' seconden<br>';
}
berekenTijd2(20, 120);