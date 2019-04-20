<?
mysql_connect("localhost", "root", "");
mysql_select_db("users");
if(isset($_POST['submit']))
{
    # Вытаскиваем из БД запись, у которой логин равняеться введенному
    $query = mysql_query("SELECT user_id, user_password FROM users WHERE user_login='".mysql_real_escape_string($_POST['login'])."' LIMIT 1");
    $data = mysql_fetch_assoc($query);
    # Соавниваем пароли
    if($data['user_password'] === ($_POST['password']))
    {
        # Ставим куки
        setcookie("id", $data['user_id'], time()+60*60*24*30);
        # Переадресовываем браузер на страницу проверки нашего скрипта
        header("Location: index.php"); exit();
    }
    else
    {
        print "Вы ввели неправильный логин/пароль";
    }
if(isset($_POST['logout']))
{
	setcookie("id", "", time()-3600);
}
}?>