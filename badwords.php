<?php
$paragraph = $_GET["paragraph"];
$bad_word = $_GET["bad-word"];
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

    <section>
        <h2>Testo originale:</h2>
        <p>
            <?php echo $paragraph; ?>
        </p>
        <p>
            <?php echo strlen($paragraph); ?>
        </p>
    </section>

    <section>
        <h2>Testo Censurato:</h2>
        <p>
            <?php $bad_text = str_replace($bad_word, "***", $paragraph);
            echo $bad_text;
            ?>
        </p>
        <p>
            <?php echo strlen($bad_text); ?>
        </p>
    </section>
</body>

</html>