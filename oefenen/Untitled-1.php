<?php
//pow(5, 2); = is kwadraad
//sqrt() = is wortel

//tan = als je wel een graden hebt en een zijden
//atan = als je alleen zijden hebt en een graden wilt berekenen
//deg2rad(); Graden naar radialen
// % 2 == 0 == even

//Hoofdstuk 8.2, 8.3, 8.4 & 8.6

// $v = pow(0.836 , 3/2);
// echo $v;

// $k = pow(5 , 2);
// echo $k;


function berekenDriehoek (int $a, int $b) {
    $a = pow($a, 2);
    $b = pow($b, 2);
    $c = $a + $b;
    $c = sqrt($c);

    echo $c;
}
// berekenDriehoek(3, 4); //Correcte antwoord moet 5 zijn

function tanBerekening (int $beta, int $c) {
    $beta = deg2rad($beta);
    $beta = tan($beta);
    $result = $beta * $c;
    echo $result;
}
// tanBerekening(36, 4);

//overstaande / aanliggende
function aTanBerekening (int $a, int $b) {
    $gedeelddoor = $a / $b;
    $atanInRadialen = atan($gedeelddoor);
    echo rad2deg($atanInRadialen);
}
// aTanBerekening(3, 4);



function sinBerekening() {

}