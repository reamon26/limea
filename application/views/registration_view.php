<?php



echo $_POST['email_reg'];
echo "<br>";
echo $_POST['password_reg'];
echo "<br>";

if (isset($_POST['email_reg'])) { $login = $_POST['email_reg']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
if (isset($_POST['password_reg'])) { $password=$_POST['password_reg']; if ($password =='') { unset($password);} }
//заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
{
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}


if    (strlen($login) < 3 or strlen($login) > 127) {
    echo strlen($login);
    exit    ("Логин должен состоять не менее чем из 3 символов и не более чем из    127.");

}
if    (strlen($password) < 3 or strlen($password) > 15) {
    exit    ("Пароль должен состоять не менее чем из 3 символов и не более чем из    15.");
}

//если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);
//удаляем лишние пробелы
$login = trim($login);
$password = trim($password);

$password    = md5($password);//шифруем пароль
$password    = strrev($password);// для надежности добавим реверс
$password    = $password."reamon26";

echo "<br>".$password."<br>";
// подключаемся к базе
require_once ("php/db.php");// файл db.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь
// проверка на существование пользователя с таким же логином
$result = mysql_query("SELECT id FROM users WHERE login='$login'",$db);
$myrow = mysql_fetch_array($result);
if (!empty($myrow['id'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
}
// если такого нет, то сохраняем данные
$result2 = mysql_query ("INSERT INTO users (login,password) VALUES('$login','$password')");
// Проверяем, есть ли ошибки
if ($result2=='TRUE') {
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
}
else {
    echo "Ошибка! Вы не зарегистрированы.";
}