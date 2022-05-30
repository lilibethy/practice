<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

<div class="flex-container">

    <div class="header">
        <?php include 'logo.inc.php' ?>
        <?php include 'menu.inc.php' ?>
    </div>

    <div class="about_me">

        <h1> <?php echo $p ?> </h1>

        <div class="data">
            <div class="myImg">
                <?php
                echo '<img src="img/me.jpg" alt="sorry not sorry" width="400" height="300">';
                ?>
            </div>

            <div class="fullname">
                <p> Меня зовут
                    <?php echo $name, ' ', $surname . '<br>';
                    echo 'город', ' ', $city; ?>
                </p>

                <p> Мне
                    <?php echo $age;    ?>
                    лет </p>
                <p> Мы научились (наверно, но не факт) создавать переменные </p>
                <p> Изучили простые (как сказать) операции с ними </p>
                <p> Дико извиняюсь, но картинка с чудесным котиком у меня, почему-то, открывается не во всех браузерах</p>
                <p> Но надеюсь, что он тут есть! Впрочем, спасибо за понимание))</p>
            </div>
        </div>

        <div class="knowledge">

            <?php include 'knowledge.inc.php'; ?>
            <?php
            echo $a, ' ', $b, ' ', $c;
            ?> <br>

            <?php
            $a = 100;
            $b = 200;
            $c = $a + $b;
            echo $c;
            ?>  <br>
            <?php
            echo $d;
            ?>

        </div>

        <div class="article">
            <p class="text">
                Здесь должна быть цитата, но я просто скажу,
                что если бы не видео по проекту на сайте Skillfactory,
                я бы над этим сайтом сидела в 2 раза дольше. Особенно на Mac OS...
                Так что спасибо))
            </p>
        </div>
    </div>

    <?php include 'footer.inc.php' ?>

</div>

</body>
</html>

