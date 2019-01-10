<?php
session_start();
if (!$_SESSION['login'] || !$_SESSION['password']) {
    header("Location: login.php");
    die();
}

if ($_POST['unlogin']) {
    session_destroy();
    header('Location: login.php');
}

?>

<body>
<p>Сайт только для авторизированных пользователей</p>
<? echo "Привет, " . $_SESSION['login'] . "<br>"; ?>
<img src="1.png" alt="Picture" width="600" style="display: block">

<form method="POST" style="margin: 40px; font-size: 40px">
    <input style="font-size: 30px" type="submit" name="unlogin" value="НА СТРАНИЦУ АВТОРИЗАЦИИ">
</form>

</body>
