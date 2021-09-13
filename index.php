<?php
$value = filter_input(INPUT_POST, "castka");
$conversion = filter_input(INPUT_POST, "prevod");

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
    <?php
    if (isset($value) && isset($conversion)) {
        
        if ($conversion == "eur_czk") {
            echo "$value € je " . $value * 25 . " CZK"; 
        }   
    
        if ($conversion == "czk_eur") {
            echo "$value CZK je " . $value / 25 . " €";
        }
    } else {
    ?>
    
    <form action="" method="post">
    <h3>Částka</h3>    
        <input type="number" name="castka" id="castka">
    
    <br></br>

    <h3>Převod</h3>
        <input type="radio" name="prevod" id="eur_czk" value="eur_czk">
            <label for="czk_eur">EUR -> CZK</label>
    
    <br></br>

        <input type="radio" name="prevod" id="czk_eur" value="czk_eur">
            <label for="czk_eur">CZK -> EUR</label>
    
    <br></br>

<input type="submit" value="Převést">
    </form>

    <?php } ?>

</body>
</html>
