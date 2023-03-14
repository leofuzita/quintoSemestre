<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Praticando - ANIMAIS</h1>
    <?php
    // URL do site para redirecionar
    $i1 = "http://localhost/Praticando05/pg2.php";
    $i2 = "http://localhost/Praticando05/pg3.php";
    $i3 = "http://localhost/Praticando05/pg4.php";
    $i4 = "http://localhost/Praticando05/pg5.php";

?>
   <a href="<?php echo $i1 ?>"><img src="gato.jpg" alt=""></a>
   <a href="<?php echo $i2 ?>"><img src="lagartixa.jpg" alt=""></a>
   <a href="<?php echo $i3 ?>"><img src="hamster.jpg" alt=""></a>
   <a href="<?php echo $i4 ?>"><img src="cachorro.jpg" alt=""></a>
</body>
</html>