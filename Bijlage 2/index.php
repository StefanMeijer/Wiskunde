<?php
//Totaal 75 plaatsen (personenauto's)

//Autobus = 3 plaatsen
//Auto levert 3 euro parkeergeld
//Autobus levert 10 euro parkeergeld

//Max 10 parkeerplaatsen voor autbussen aanleggen
//Minimaal aantal AUTOparkeerplekken = bussen*3*3 = minimaal aantal AUTOparkeerplekken
//Maximaal aantal AUTOparkeerplekke = bussen*3*8 = maximaal aantal AUTOparkeerplekken

//het aantal autoparkeerplaatsen mag maximaal 8 keer
//en minimaal 3 keer het aantal parkeerplaatsen
//voor autobussen zijn

function minMax (int $busAantal, int $parkeerplaatsen, int $autos) {
    $min = $busAantal * 3 * 3;
    $max = $busAantal * 3 * 8;
    $parkeerplaatsen = $parkeerplaatsen - ($busAantal * 3);

    //Voor de functie's die wel auto's hebben gedefinieerd
    if ($autos > 0 && $autos > $min && $parkeerplaatsen < $max) {
        return true;
    }
    //Voor de functie's die geen auto's hebben gedefinieerd
    if ($autos == 0 && $parkeerplaatsen > $min && $parkeerplaatsen < $max) {
        return true;
    }
    return false;
}

function bepaalOpbrengst (int $autos, int $bussen) {
    $parkeerplaatsen = 75;

    if (!minMax($bussen, $parkeerplaatsen, $autos)) {
        echo 'Randvoorwaarden niet voldaan';
    } else {
        //Bussen nemen 3 plekken in, plus de auto plekken kleiner of gelijk aan het aantal parkeerplekken
        if (($bussen * 3) + $autos <= $parkeerplaatsen) {
            $autos = $autos * 3; // Aantal auto's keer 3 euro
            $bussen = $bussen * 10; // Aantal bussen keer 10 euro
            $dagopbrengst = $autos + $bussen; // Dagopbrengst is totaal auto's plus bussen
        
            echo 'Dagopbrengst: €' . $dagopbrengst;
        } else {
            echo 'Randvoorwaarden niet voldaan';
        }
    }
}
bepaalOpbrengst(40, 5);

echo '<br>';

function bepaalAutoEnBus (int $dagopbrengst, int $bus) {
    $parkeerplaatsen = 75;

    if (!minMax($bus, $parkeerplaatsen, 0)) {
        echo 'Randvoorwaarden niet voldaan';
    } else {
        $busGeld = $bus * 10; //aantal bussen keer 10 (voor totaalgeld bussen)
        $aantalAutos = ($dagopbrengst - $busGeld) / 3; //Busgeld van dagopbrengst afhalen en delen door 3 voor het aantal auto's
    
        echo 'Aantal autos: ' . floor($aantalAutos);
    }
}
bepaalAutoEnBus(300, 10);

echo '<br>';

function bepaalMaximaleOpbrengst () {
    $parkeerplaatsen = 75;

    for ($x = 10; $x >= 0; $x--) { //Loopen totdat hij true returnt
        $autos = $parkeerplaatsen - ($x * 3); //Auto's = parkeerplaatsen - ingenomen parkeerplaatsen door bussen
        if (minMax($x, $parkeerplaatsen, $autos)) { //Is true gereturnt
            bepaalOpbrengst($autos, $x); //Bepaalopbrengst functie
            exit;
        }
    }
}
bepaalMaximaleOpbrengst();