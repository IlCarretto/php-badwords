<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="badwords.php" method="GET">
        <div>
            <label for="paragraph">Inserisci un paragrafo</label>
            <textarea name="paragraph" id="paragraph" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="bad-word">Inserisci una parola da censurare</label>
            <input name="bad-word" id="bad-word" cols="30" rows="10"></input>
        </div>
        <button type="submit">Invia</button>
    </form>

</body>

</html>