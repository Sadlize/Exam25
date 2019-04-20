<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico">
<link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111">
<title>Кадровое агенство</title>
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
<script src="js/MyScript.js"></script>
</head>
<body translate="no">
<?
mysql_connect("localhost", "root", "");
mysql_select_db("users");
if (isset($_COOKIE['id']))
{   
    $query = mysql_query("SELECT *,INET_NTOA(user_ip) FROM users WHERE user_id = '".intval($_COOKIE['id'])."' LIMIT 1");
    $userdata = mysql_fetch_assoc($query);
    if(($userdata['user_id'] !== $_COOKIE['id']))
    {
        setcookie("id", "", time() - 3600*24*30*12, "/");
        print "Хм, что-то не получилось";
    }
    else
    {
print '<div class="login-page">
<p style="text-align: center;">База Данных кадрового агенства KardAgent</p>
<div class="form">
';
print "Привет, ".$userdata['user_login'].".</p>
<form class='login-form' method='POST' action='admin.php'>
<button  >Просмотр сотрудников</button>
<button name='vacansy' style='margin-top: 15px;'>Список вакансий</button>
<button name='logout' type='submit' style='background: #ef3b3a;margin-top: 15px;'>Выход</button>
</form>

</div>
</div>";
    }
}
else
{
    include 'check.php';
}
?>

<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://static.codepen.io/assets/editor/live/css_reload-5619dc0905a68b2e6298901de54f73cefe4e079f65a75406858d92924b4938bf.js"></script>
</body>
</html>