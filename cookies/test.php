<?php

session_start();

if ($_POST['unlogin']) {
    if ($_SESSION['login'] || $_SESSION['password']) {
        header("Location: test.php");
        die();
    } else {
        session_destroy();
        header('Location: login.php');
    }
}

?>

<!--<body>-->
<?
$color = $_SESSION['color'];
echo "<body style=\"background-color: $color\">";
?>
<p>Сайт только для авторизированных пользователей</p>
<? echo "Привет, " . $_SESSION['login'] . "<br>"; ?>
<img src="run.jpg" alt="Picture" width="600" style="display: block">

<form method="POST" style="margin: 40px; font-size: 40px">
    <input style="font-size: 30px" type="submit" name="unlogin" value="Ты не пройдёшь!">
</form>

</body>