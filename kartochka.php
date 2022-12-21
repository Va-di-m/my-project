<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Карточка товара</title>
</head>

<?php

$conn = mysqli_connect("localhost", "root", "", "test");
$result = mysqli_query($conn, "SELECT * FROM `mix`");
$good = mysqli_fetch_assoc($result);

    ?>

<body>

    <?php require "blocks/header.php"?>



            <h3 class="karta">Карточка товара</h3>

            


    <?php require "blocks/footer.php" ?>
   

   <script type="text/javascript" src="menu.js"></script>

</body>


</html>