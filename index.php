<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Страница 1</title>
</head>


<body>

    <?php require "blocks/header.php"?>

    




    <main class="main">
        <secnion class="headline">
            <div class="container">
                <h1 class="title">Название 1</h1>
                <img class="h-img" src="images/m5.jpg" alt="Сумки жеские" >
                <a class="h-btn" href="" >ВЫБРАТЬ</a>
            </div>
        </secnion>

        <section class="new">
            <div class="container">
                <h2 class="new-title">ЧТО НОВОГО</h2>
                <div class="new-info">
                    <div class="new-text">
                        <p>Какой-то текст Какой-то текст Какой-то текст Какой-то текст</p>
                        <p>Какой-то текст</p>
                        <p>Какой-то текст</p>
                        <b>Жирный текст</b>
                    </div>
                    <img class="img-new" src="images/m3.jpg" alt="Женские рюкзаки" >
                </div>
            </div>
        </section>

        <section class="color">
            <div class="container">
                <h2 class="color-title">ВЫБЕРИТЕ ЦВЕТ</h2>
                <ul class="color-list">
                    <li class="color-item">
                        <img class="img4" src="images/ss3.jpg" alt="">
                        <h3>BLACK</h3>
                        <p>ЧЕРНЫЕ</p>
                    </li>
                    <li class="color-item">
                        <img class="img4" src="images/ss3.jpg" alt="">
                        <h3>BLACK</h3>
                        <p>ЧЕРНЫЕ</p>
                    </li>
                    <li class="color-item">
                        <img class="img4" src="images/ss3.jpg" alt="">
                        <h3>BLACK</h3>
                        <p>ЧЕРНЫЕ</p>
                    </li>
                    <li class="color-item">
                        <img class="img4" src="images/ss3.jpg" alt="">
                        <h3>BLACK</h3>
                        <p>ЧЕРНЫЕ</p>
                    </li>
                </ul>
        </section>

        <section class="contacts">
            <div class="container">
                <div class="contacts-inner">
                    <form class="contacts-form" action="#">
                        <h2 class="contacts-title">ОФОРМЛЕНИЕ ЗАКАЗА</h2>
                        <input class="contacts-input" type="text" placeholder="Ваше имя">
                        <input class="contacts-input" type="text" placeholder="Ваш телефон">
                        <p>В ближайшее время наш менеджер свяжется с Вами</p>
                        <button type="sabmit">ЗАКАЗАТЬ</button>

                    </form>

                    <img class="img2" src="images/ss4.jpg" alt="сумка" >

                </div>
            </div>
              
        </section>

    </main>

    
    





    <?php require "blocks/footer.php" ?>
   

    <script type="text/javascript" src="menu.js"></script>

</body>


</html>