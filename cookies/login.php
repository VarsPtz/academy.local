<?php

    session_start();
    //ini_set('session.gc_maxlifetime', 3600);
    $connection = new PDO('mysql:host=localhost; dbname=academy; charset=utf8', 'root', '');
    $login = $connection->query('SELECT * FROM `login`');


if ($_SESSION['login'] || $_SESSION['password']) {
    header('Location: test.php');
    die();
}

    if ($_POST['login']) {
        foreach ($login as $log) {
            if ($_POST['login'] == $log['login'] && $_POST['password'] == $log['password']) {
                $_SESSION['login'] = $_POST['login'];
                $_SESSION['password'] = $_POST['password'];
                $_SESSION['color'] = $_POST['color'];
                //header("Location: content.php");
                header("Location: test.php");
            }
        }
        echo "Неверный логин или пароль";
    }

//if (!$_SESSION['login'] || !$_SESSION['password']) {
//    header("Location: test.php");
//    die();
//}
//} else {
//    header('Location: login.php');
//}

?>

<style>
    body {
        margin: 200px 300px;
    }
    input, p {
        font-size: 30px;
        margin: 10px;
    }
</style>

<form method="POST">
    <p>Авторизуйтесь</p>
    <input type="text" name="login" required placeholder="Логин"> <br>
    <input type="password" name="password" required placeholder="Пароль"> <br>
    <p>
        <select size="1"  name="color">
            <option value="blue">Синий</option>
            <option value="green">Зелёный</option>
            <option value="red">Красный</option>
        </select>
    </p>
    <input type="submit">
</form>