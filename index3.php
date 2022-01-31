<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
<?php 

function getArrayNumbers ($min, $max, $nItems) {
    $generatedNumbers = [];

    while(count($generatedNumbers) < $nItems) {
        $randomNumber = rand($min, $max);
        if (!in_array($randomNumber, $generatedNumbers)) {
            $generatedNumbers[] = $randomNumber;
        }
    }

    return $generatedNumbers;
}

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