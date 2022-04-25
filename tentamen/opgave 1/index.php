<?php
//Studentnaam: Stefan Meijer
//Klas: INF1C
//Studentnummer: 5033454

//Opgave 1 wet van Ohm
//Wet van Ohm = P=i^2R

//A) Ontwikkel 3 routines/functies(of 1 routine/functie) die berekenen wat de waarde is van een variabele gegeven 2 twee andere variabelen
function wetVanOhm (float $vermogen, int $stroomsterkte, int $weerstand) {
    //Bereken het vermogen
    if ($vermogen == 0) {
        $stroomsterkte = pow($stroomsterkte, 2);
        $vermogen = $stroomsterkte * $weerstand;
        echo 'Het vermogen is: ' . $vermogen . '<br>';
    }

    //Bereken de stroomsterkte
    if ($stroomsterkte == 0) {
        $stroomsterkte = $vermogen / $weerstand;
        $stroomsterkte = sqrt($stroomsterkte);
        echo 'De stroomsterkte is ' . $stroomsterkte . '<br>';
    }

    //Bereken de weerstand
    if ($weerstand == 0) {
        $stroomsterkte = pow($stroomsterkte, 2);
        $weerstand = $vermogen / $stroomsterkte;
        echo 'De weerstand is: ' . $weerstand. '<br>';
    }
}
wetVanOhm(5, 2, 0);     //Bereken weerstand     - 1) Wat is de weerstand bij een vermogen van 5 en stroomsterke van 2?
wetVanOhm(4.5, 0, 2);   //Bereken stroomsterkte - 2) Wat is de stroomsterkte bij een vermogen van 4,5 en een weerstand van 2?
wetVanOhm(0, 3, 2);     //Bereken vermogen      - 3) Wat is het vermogen bij een stroomsterkte van 3 en een weerstand 2?