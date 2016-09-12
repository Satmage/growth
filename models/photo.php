<?php

require_once __DIR__ . '/../function/sql.php';

function Photos_getAll() 
{

	sql_connect();
	//Выборка данных из БД
	$sql = 'SELECT * FROM image';
	//Заносим данные из БД в переменную
	$res = mysql_query($sql);

	$ret = [];

	/*
	Пока есть данные в БД записывать их в 
	массив (с преобразованием типа объкта в массив)
	*/
	while (false !== ($row = mysql_fetch_assoc($res))) {
		$ret[] = $row;
	}

	return $ret;
}
