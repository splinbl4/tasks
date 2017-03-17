<?php
session_start();
if (isset($_POST['submit1'])) {
    $errors = [];
    $login = $_POST['login'];
    $password = $_POST['password'];
    if (isset($login)) {
        $login = htmlspecialchars($login, ENT_QUOTES);
        $login = strip_tags($login);
        $login = trim($login);
        if ($login == '') {
            $errors[] = 'Введите логин!';
        }
    }
    if (isset($password)) {
        $password = htmlspecialchars($password, ENT_QUOTES);
        $password = strip_tags($password);
        $password = trim($password);
        if ($password == '') {
            $errors[] = 'Введите пароль!';
        }
    }

    if (empty($errors)) {
        var_dump($_SESSION['login'] = $login);
        //header('Location: index.php');
    } else {
        echo $errors[0];
    }
}
?>
<form method="POST">
    <label>Логин:</label><br>
    <input name="login" type="text" value="<?php echo $_POST['login']?>"><br>
    <label>Пароль:</label><br>
    <input name="password" type="password" value="<?php echo $_POST['password']?>"><br><br>
    <button name="submit1" type="submit">Войти</button>
    <p>Перейдите на <a href='page_a.php'>Page A</a></p>
    <p>Перейдите на <a href='page_b.php'>Page B</a></p>
</form>