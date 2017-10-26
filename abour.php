<?php
$name = "Михаил";
$surname = "Козлов";
$age = 16;
$vk = 'https://vk.com/yohdoto';
$city = 'Ylianovsk';
$about = 'ЛУЧШИЙ В МИРЕ';
?>





<!Doctype html>
<html>
<head>
<title><?= $surname . " " . $name; ?></title>
<meta charset = "ulf-8">
<style type="text/css">
	body {
	font-family: sans-serif;
}

 dl {
 display: table -row;
}

dt,dd { 
display: table-cell;
padding:3px 8px;
}
</style>
</head> 

<body>
	<h1>Страница пользователя <?=$surname . ' ' . $name; ?></h1>
	<d1>
		<dt>Имя</dt>
		<dd><?= $name; ?></dd>
	</d1>
	<dl>
		<dt>Возраст</dt>
		<dd><?= $age; ?></dd>
	</dl>
<dl>
	<dt>Вконтакте</dt>
	<dd><a herf="<?= $vk; ?>"><?= $vk; ?></a></dd>
</dl>
<dl>
	<dt>Город</dt>
	<dd><?= $city; ?></dd>
</dl>
<dl>
	<dt>О себе</dt>
	<dd><?= $about; ?></dd>
</dl>

</body>
</html>