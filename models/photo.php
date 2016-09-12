<?php

require_once __DIR__ . '/../function/sql.php';

function Photos_getAll() 
{	
	$sql = 'SELECT * FROM image';
	return sql_query($sql);
}
