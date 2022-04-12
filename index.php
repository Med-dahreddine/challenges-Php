<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // challenge le grand nombre dans un array
    $numbers = array(3, 6, 4, 1);
    $arrLength = count($numbers);
    function find_Big_Number($array, $taille)
    {
        $big = $array[0];
        for ($i = 0; $i < $taille; $i++) {
            // echo $array[$i];
            // echo "<br>";
            if ($big < $array[$i]) {
                $big = $array[$i];
            }
        }
        echo "le grand nombre : $big";
    }
    find_Big_Number($numbers, $arrLength);
    ?>
</body>

</html>