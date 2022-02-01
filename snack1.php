<?php

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    <div class="green-sq">

        <?php foreach($db as $key => $data){ s
            if ($key === 'teachers') {
                foreach($data as $teacher){
                    echo ($teacher['name']);
                    echo ($teacher['lastname']);
                };
            }
        }
        ?>

    </div>
    <div class="grey-sq">
        <?php foreach($db as $key => $data){ 
                if ($key === 'pm') {
                    foreach($data as $teacher){
                        echo ($teacher['name']);
                        echo ($teacher['lastname']);
                    };
                }
            }
        ?>
    </div>

</body>
</html>