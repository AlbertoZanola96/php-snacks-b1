<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
$partite = [
    [
        "squadraCasa"  => "Chicago bulls",
        "squadraOspite" => "Lakers",
        "puntiCasa" => 80,
        "puntiOspite" => 95
    ],
    [
        "squadraCasa" => "Miami heat",
        "squadraOspite" => "Boston celtics",
        "puntiCasa" => 55,
        "puntiOspite" => 70
    ],
    [
        "squadraCasa" => "Toronto raptors",
        "squadraOspite" => "Timberwolves",
        "puuntiCasa" => 65,
        "puntiOspite" => 40
    ]

];

    for ($i = 0; $i < count($partite); $i++) {
    echo '<h2>' .$partite[$i]['squadraCasa'] . ' - ' .  $partite[$i]['squadraOspite'] . ' ' . '|' . ' ' . $partite[$i]['puntiCasa'] . '-' . $partite[$i]['puntiOspite'];
}
?>
