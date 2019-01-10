<?php
//session_start();
$connection = new PDO('mysql:host=localhost; dbname=academy; charset=utf8', 'root', '');

?>

<?php
if ($_POST['login'] && $_POST['password']) {
    $userName = $_POST['login'];
    $userPassword = $_POST['password'];
    $connection->query("INSERT INTO `login` (`login`, `password`) VALUES ('$userName', '$userPassword')");
}
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
    <p>Зарегистрируйтесь на нашем сайте</p>
    <input type="text" name="login" required placeholder="Логин"> <br>
    <input type="password" name="password" required placeholder="Пароль"> <br>
    <input type="submit">
</form>