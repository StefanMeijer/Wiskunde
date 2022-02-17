<?php

//1. B1.1.1 BMI calculator
//1.1 Wat is de BMI van een persoon die 90 kg weegt en 180 cm lang is?
$massa = 90;
$lengte = 180 / 100; //Lengte in cm naar m
$kwadraad = $lengte * $lengte;
$bmi = $massa / $kwadraad;

//1.2 Hoe lang zou een persoon van 60 kg moeten zijn met een BMI van 18?
$weight = 60;
$bmi2 = 18;
$wortel = sqrt($weight / $bmi2);

//1.3 Wat is het gewicht van een persoon met een BMI van 35 en 200 hoog?
$lengte2 = 200 / 100; //Lengte in cm naar m
$bmi3 = 35;
$gewicht = $bmi3 * ($lengte2 * $lengte2);

//1.4 Wat is je eigen BMI?
$massa2 = 65;
$lengte3 = 1.80;
$kwadraad2 = $lengte3 * $lengte3;
$bmi4 = $massa2 / $kwadraad2;

echo  'Opgave 1.1:  <strong>' . round($bmi, 1) . '</strong><br>';
echo  'Opgave 1.2:  <strong>' . round($wortel, 2) . '</strong><br>';
echo  'Opgave 1.3:  <strong>' . round($gewicht, 1) . '</strong><br>';
echo  'Opgave 1.4:  <strong>' . round($bmi4, 1) . '</strong><br><br>';


//2. B1.1.2 Gemiddelde van getallen
$integers = array(19, 22, 26, 30, 34, 38, 42, 46, 50, 54, 52, 56, 60, 64, 68, 72, 76, 80, 84, 87);
$totalietijd = array_sum($integers);
$aantal = count($integers);
echo  'Opgave 2:  <strong>' . $totalietijd / $aantal . '</strong><br><br>';


//3. B1.1.3 Vermoeden van Collatz
$n = 81;
echo  'Opgave 3:  <strong>' . $n . '</strong><br>';

while ($n != 1) {
    if ($n % 2 == 0) {
        $n = $n / 2;
        echo 'n=' . $n . '<br>';
    } else {
        $n = ($n * 3) + 1;
        echo 'n=' . $n . '<br>';
    }
}
