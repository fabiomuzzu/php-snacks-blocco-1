<?php 
    $partite =
    [
        [
            'Squadra di casa' => 'Roma',
            'Squadra ospite' => 'Milano',
            'Punti squadra di casa' => '90',
            'Punti squadra ospite' => '80',
        ],
        [
            'Squadra di casa' => 'Bologna',
            'Squadra ospite' => 'Firenze',
            'Punti squadra di casa' => '70',
            'Punti squadra ospite' => '60',
        ],
        [
            'Squadra di casa' => 'Trieste',
            'Squadra ospite' => 'Salerno',
            'Punti squadra di casa' => '40',
            'Punti squadra ospite' => '20',
        ],
        [
            'Squadra di casa' => 'La Spezia',
            'Squadra ospite' => 'Genova',
            'Punti squadra di casa' => '30',
            'Punti squadra ospite' => '50',
        ]
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basket Results</title>
</head>
<body>
    <ul>
        <?php foreach($partite as $punteggio) { ?>
            <li>
                <?php echo $punteggio['Squadra di casa']. ' - ' .$punteggio['Squadra ospite'] ?>
            </li>
        <?php } ?>
    </ul>
</body>
</html>