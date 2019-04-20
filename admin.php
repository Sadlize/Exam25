<?
mysql_connect("localhost", "root", "");
mysql_select_db("users");
if(isset($_POST['logout']))
{
	setcookie("id", "", time()-3600);
	header("Location: index.php"); exit();
}
if(isset($_POST['vacansy']))
{
	header("Location: vacansy.php"); exit();
}
if(isset($_POST['back']))
{
	header("Location: index.php"); exit();
}
?>