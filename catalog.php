<?php require "blocks/header.php"?>

<link rel="stylesheet" href="css/style.css">

    <?php

$conn = mysqli_connect("localhost", "root", "", "test");
$result = mysqli_query($conn, "SELECT * FROM `mix`");
$good = mysqli_fetch_assoc($result);

    ?>


    


	
    <div class="section">

        <?php while($good = mysqli_fetch_assoc($result)) {
        ?>
        <div class="box">
	            <a href="kartochka.php">

                    <div class="box__text">
	                    <h3><?echo $good["title"]?></h3>
	                    <h4><?echo $good["price"]?> р.</h4>
                        <?echo $good["description"]?>
                    </div>

                </a>
                <a href="kartochka.php">
                    <div class="box__image">
                        <img src="<?echo $good["picture"]?>" alt="" width="100%">
                    </div>
                </a>	
        </div>

                <?php
                    }
                ?>

    </div>



    <?php require "blocks/footer.php" ?>
   

    <script type="text/javascript" src="menu.js"></script>
