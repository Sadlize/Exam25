<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico">
<link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111">
<title>Кадровое агенство</title>
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<script src="js/MyScript.js"></script>
</head>
<body translate="no">
<div class="login-page" style="width:1000px;">
<p style="text-align: center;margin-bottom: 10px;">База Данных вакансий кадрового агенства KardAgent</p>
<div class="form" style="max-width:1000px;">
<form class="login-form" method="post" action="admin.php">
<button name='back' type='submit' style=';margin-top: 15px;'>Назад</button>
<button name='logout' type='submit' style='background: #ef3b3a;margin-top: 5px;margin-bottom: 10px;'>Выход</button>
<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">ФИО Сотрудника</th>
									<th class="cell100 column2">Возраст</th>
									<th class="cell100 column3">ДатаРождения</th>
									<th class="cell100 column4">Адрес</th>
									<th class="cell100 column5">Мобильный</th>
									<th class="cell100 column6">Email</th>
									<th class="cell100 column7">Sex</th>
								</tr>
							</thead>
						</table>
					</div>

<?
mysql_connect("localhost", "root", "");
mysql_select_db("users");
if (isset($_COOKIE['id']))
{
	    $query = mysql_query('SELECT * FROM Kandidat');
		$data = mysql_fetch_assoc($query);
echo '					<div class="table100-body js-pscroll ps ps--active-y">
						<table>
							<tbody>
								<tr class="row100 body">
									<td class="cell100 column1">'.$data['FIO'].'</td>
									<td class="cell100 column2">'.$data['Age'].'</td>
									<td class="cell100 column3">'.$data['DateBirthday'].'$</td>
									<td class="cell100 column4">'.$data['Adress'].'</td>
									<td class="cell100 column5">'.$data['Mobile'].'</td>
									<td class="cell100 column6">'.$data['Email'].'</td>
									<td class="cell100 column7">'.$data['Sex'].'</td>
								</tr>
							</tbody>
						</table>
</div>';	
}
?>


</form>
</div>
</div>

<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://static.codepen.io/assets/editor/live/css_reload-5619dc0905a68b2e6298901de54f73cefe4e079f65a75406858d92924b4938bf.js"></script>
</body>
</html>