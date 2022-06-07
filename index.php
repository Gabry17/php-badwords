<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>creo e visualizzo variabile</h2>
    <p>
        <?php 
        $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem Architecto atque illum eaque in quas quidem alias ab cumque laborum eos, Lorem neque aperiam harum expedita ullam quasi. Quia amet pariatur blanditiis!";
        echo $text;
        ?>
    </p>

    <h2>stampo la lunghezza</h2>
    <p>
        <?php 
        echo "La mia lunghezza è: " . strlen($text);
        ?>
    </p>

    <h2>Parola da censurare</h2>
    <p>
        <?php
        $badWords = $_GET["words"];
        echo $badWords;
    ?>
    </p>

    <h2>Censurare parola</h2>
    <p>
        <?php
        $censor = str_replace($badWords, "***", $text);
        echo $censor;
        echo "<br> La mia lunghezza è: " . strlen($censor);
        ?>
    </p>

</body>
</html>