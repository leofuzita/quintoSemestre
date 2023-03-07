<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino</title>
</head>

<body>
    <h1>Destino GET</h1>
    <hr>
    <?php
    $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_EMAIL);
    $cor = filter_input(INPUT_GET, "cor", FILTER_SANITIZE_SPECIAL_CHARS);
    echo "<p>Nome infomrado: $nome<br>Email: $email</p>"
    ?>

    <p>
        <a href="destino.php?nome=Dimas&email=dimas@gmail.com">ENVIAR DADOS [NOME= Dimas | EMAIL = dimas@gmail.com]</a>
    </p>
    <p>

        <a href="destino.php?cor=black"><img src="timao.png"></a>
        <a href="destino.php?cor=green"> <img src="palmeiras.png"> </a>
    </p>
    <p>
        <a href="pg1.php">Voltar para o formulario</a>
    </p>

    <style>
        body {
            background-color: <?php echo $cor; ?>;
        }
    </style>
</body>

</html>