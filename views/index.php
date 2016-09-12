<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table border="1">
	<tr>
		<th>Название</th>
	</tr>
	<?php foreach ($items as $item): ?>
	<tr>
		<td><?= $item['title']; ?></td>
	</tr>
	<?php endforeach; ?>
</table>

<a href="./add.php">Добавить фото</a>

</body>
</html>