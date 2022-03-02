<?php
// Model A vereist 15 minuten werk op montagelijn I en 10 minuten werk op montagelijn 2.
// Model B vereist 10 minuten werk op montagelijn I en 12 minuten werk op montagelijn II. 

// Er zijn hoogstens 25 montage-uren op lijn I en 22 montage-uren op lijn II per dag.

// Om overproductie te vermijden beslist de directie om maximaal 80 wekkerradio’s van model A te produceren

// ModelA = 12 euro
// ModelB = 10 euro
function produceerWekkerRadios (int $modelA, int $modelB) {
    $montagelijn1 = 25; // Max 1500minuten / 25 uren
    $montagelijn2 = 22; // Max 1320minuten / 22 uren
    $winst = 0; // In euro's

    // Check of er minder dan 80 modellen van A zijn
    if ($modelA <= 80) {
        // Aantal minuten delen door 60 voor uren
        $montagelijn1A = ($modelA * 15) / 60; // lijn 1 model A
        $montagelijn2A = ($modelA * 10) / 60; // lijn 2 model A
        $montagelijn1B = ($modelB * 10) / 60; // lijn 1 model B
        $montagelijn2B = ($modelB * 12) / 60; // lijn 2 model B

        // Check om te kijken of de montagelijnen niet overbelast zijn
        if (($montagelijn1A + $montagelijn1B) <= $montagelijn1 && ($montagelijn2A + $montagelijn2B) <= $montagelijn2) {
            // Winst berekenen
            $winst += $modelA * 12;
            $winst += $modelB * 10;

            // Berkenen hoe lang de productielijn ongebruikt is
            $montagelijn1 = ($montagelijn1 - ($montagelijn1A + $montagelijn1B)) * 60; // Totaal aantal uren - montage uren * 60 voor aantal minuten
            $montagelijn2 = ($montagelijn2 - ($montagelijn2A + $montagelijn2B)) * 60; // Totaal aantal uren - montage uren * 60 voor aantal minuten

            echo 'De totale winst is: €' . $winst . '<br>';
            echo 'Productielijn 1 = ' . $montagelijn1 . ' minuten ongebruikt.<br>';
            echo 'Productielijn 2 = ' . $montagelijn2 . ' minuten ongebruikt.<br>';
        } else {
            echo 'Randvoorwaarden niet voldaan! - Te veel montageuren!<br>';
        }
    } else {
        echo 'Randvoorwaarden niet voldaan! - Maximaal 80 modellen van model A!<br>';
    }
}
produceerWekkerRadios(17, 31);

echo '<br>';

//Met gelijke aantallen radio's
function produceerMaxRadios () {
    $montagelijn1 = 25; // Max 1500minuten / 25 uren
    $montagelijn2 = 22; // Max 1320minuten / 22 uren
    $modelA = 0; // In aantallen
    $modelB = 0; // In aantallen
    $winst = 0; // In euro's
    
    for ($i=0; $i < 100; $i++) {
        // Aantal minuten delen door 60 voor uren
        $montagelijn1A = ($i * 15) / 60; // lijn 1 model A
        $montagelijn2A = ($i * 10) / 60; // lijn 2 model A
        $montagelijn1B = ($i * 10) / 60; // lijn 1 model B
        $montagelijn2B = ($i * 12) / 60; // lijn 2 model B

        // Check om te kijken of lijn 1 niet overbelast zijn
        if (($montagelijn1A + $montagelijn1B) <= $montagelijn1) {
            $modelB = $i;
        }

        // Check om te kijken of lijn 2 niet overbelast zijn
        if (($montagelijn2A + $montagelijn2B) <= $montagelijn2) {
            // Check of er minder dan 80 modellen van A zijn
            if ($modelA <= 80) {
                $modelA = $i;
            }
        }
    }

    // Winst berekenen
    $winst += $modelA * 12;
    $winst += $modelB * 10;

    return  $modelA + $modelB . ' aantal wekkerradios. Maximale winst is: €' . $winst;
}
echo 'Maximale winst met: ' . produceerMaxRadios();