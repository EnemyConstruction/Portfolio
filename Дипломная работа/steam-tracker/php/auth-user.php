<?php
$login = filter_var(trim($_POST['login']));
$pass = filter_var(trim($_POST['password']));

if($_POST['login'] & $_POST['password']){
$pass = md5($pass."@41ogmt%5!wqE@Q&%83");

    $mysql = new mysqli('localhost', 'root', '', 'steam_tracker_db');
    echo($login);
    echo($pass);
    $result = $mysql->query("SELECT * FROM users WHERE login = '$login' AND password = '$pass'");
    $user = $result->fetch_assoc();

    if($user == 0)
    {
    echo  "Такой пользователь не найден!";
    exit();
    }

    $mysql->close();

    header('Location: ../main-auth-page.php');
}
?>