<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table border="1">
	<tr>
		<th>Название</th>
		<th>Фото</th>
	</tr>
	<?php foreach ($items as $item): ?>
	<tr>
		<td><?= $item['title']; ?></td>
		<td><img src="<?= $item['path']; ?>" style="max-width: 200px"</td>
	</tr>
	<?php endforeach; ?>
</table>

<a href="./add.php">Добавить фото</a>

</body>
</html>