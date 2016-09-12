<?php

require_once __DIR__ . './../function/sql.php';

function Photos_getAll() 
{	
	$sql = 'SELECT * FROM image';
	return sql_query($sql);
}

function Photo_insert($data) {
	$sql = "
			INSERT INTO image
			(title, path)
			VALUES
			('" . $data['title']."', '" . $data['image'] . "')
			";
		sql_exec($sql);
}