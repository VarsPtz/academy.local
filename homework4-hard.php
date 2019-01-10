<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homework №4 - Hard.</title>
</head>
<body>
<pre>
    <?php
    $newArray = ['Метод GET отправляет скрипту всю собранную информацию формы как часть URL.',
        'Метод POST передает данные таким образом, что пользователь сайта уже не видит передаваемые скрипту данные.',
        'Принцип работы метода GET ограничивает объём передаваемой скрипту информации.',
        'Так как метод GET отправляет скрипту всю собранную информацию формы как часть URL (то есть в открытом виде), то это может пагубно повлиять на безопасность сайта.',
        'Страницу, сгенерированную методом GET, можно пометить закладкой (адрес страницы будет всегда уникальный), а страницу, сгенерированную метод POST нельзя (адрес страницы остается неизменным, так как данные в URL не подставляются).',
        'Используя метод GET можно передавать данные не через веб-форму, а через URL страницы, введя необходимые значения через знак &',
        'Метод POST в отличие от метода GET позволяет передавать запросу файлы',
        'При использовании метода GET существует риск того, что поисковый робот может выполнить тот или иной открытый запрос'];
    print_r($newArray);
    ?>
</pre>
<h3>Форма №1 (GET)</h3>
<form action="" method="get">
    <p>Ваше имя: <input type="text" name="name"/></p>
    <p>Ваша фамилия: <input type="text" name="surname"/></p>
    <p>Ваш возраст: <input type="text" name="age"/></p>
    <p><input type="submit"></p>
</form>
<?php
    echo 'Привет, меня зовут ' . htmlspecialchars($_GET['name']) . ' ' . htmlspecialchars($_GET['surname'])
    . ', мой возраст -  ' . (int)($_GET['age'])
?>

<h3>Форма №2 (POST)</h3>
<form action="" method="post">
    <p>Ваше имя: <input type="text" name="name"/></p>
    <p>Ваша фамилия: <input type="text" name="surname"/></p>
    <p>Ваш возраст: <input type="text" name="age"/></p>
    <p><input type="submit"></p>
</form>
<?php
    echo 'Привет, меня зовут ' . htmlspecialchars($_POST['name']) . ' ' . htmlspecialchars($_POST['surname'])
    . ', мой возраст -  ' . (int)($_POST['age'])
?>
</body>
</html>

