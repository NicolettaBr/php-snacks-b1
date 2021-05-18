<?php

//SNACK 1
//Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
//Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
//Stampiamo a schermo tutte le partite con questo schema. Olimpia Milano - Cantù | 55-60

$partite = [
    [
        'squadra_casa' => 'Virtus Roma',
        'squadra_ospite' => 'Varese',
        'punti_squadra_casa' => 78,
        'punti_squadra_ospite' => 53,
    ],
    [
        'squadra_casa' => 'Dinamo Sassari',
        'squadra_ospite' => 'Reggiana',
        'punti_squadra_casa' => 49,
        'punti_squadra_ospite' => 63,
    ],
    [
        'squadra_casa' => 'Olimpia Milano',
        'squadra_ospite' => 'Reyer Venezia',
        'punti_squadra_casa' => 57,
        'punti_squadra_ospite' => 66,
    ]
    
];

//var_dump($partite);

//SNACK 2
//Passare come parametri GET name, mail e age 
//verificare (cercando i metodi che non conosciamo nella documentazione) 
//che name sia più lungo di 3 caratteri, 
//che mail contenga un punto e una chiocciola e 
//che age sia un numero. 
//Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];
$age_int = intval($age);


//var_dump($name);
//var_dump($mail);
//var_dump($age);
//var_dump(intval($age));

$risultato = 'Accesso riuscito';

if(strlen($name) < 3){
    echo 'Accesso negato';

}elseif(strpos($mail, '@') === false || strpos($mail, '.') === false){
    echo 'Accesso negato';

}elseif($age != $age_int || $age_int === 0){
    echo 'Accesso negato';

}else{
    echo $risultato;
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snacks</title>
</head>
<body>

    <ul>
        <?php for($i = 0; $i < count($partite); $i++) { ?>
            <?php $this_partita = $partite[$i]; ?>
            <?php //var_dump($this_partita); ?>

            <li><?php echo $this_partita['squadra_casa'] ?> - <?php echo $this_partita['squadra_ospite'] ?> | <?php echo $this_partita['punti_squadra_casa'] ?> - <?php echo $this_partita['punti_squadra_ospite'] ?></li>
            
        
        <?php } ?>    
    </ul>
    
</body>
</html>