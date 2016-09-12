<?php
function sql_connect()
{
	mysql_connect('localhost','root','');
	mysql_select_db('gallery');
}
	
function sql_query($sql)
{
	sql_connect();
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

?>