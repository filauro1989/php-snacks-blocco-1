<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
<?php 

function getArrayNumbers ($min, $max, $nItems) {
    $generatedNumbers = [];

    // finche l'array generatedNumbers è minore del limite di numeri inserito
    while(count($generatedNumbers) < $nItems) {
        // creo variabile randomNumber in cui inserisco un numero random decidendo gli estremi
        $randomNumber = rand($min, $max);
        // se l'array non contiene il numero random generato allora inserisci il suddetto in generatedNumbers
        if (!in_array($randomNumber, $generatedNumbers)) {
            $generatedNumbers[] = $randomNumber;
        }
    }
    // la funziona ritorna l'array di numeri generati
    return $generatedNumbers;
};

$numeri = getArrayNumbers(1, 100, 15);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>

        <?php echo var_dump($numeri) ?>

    </h1>
</body>
</html>