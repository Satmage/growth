<?php
/*
Создать класс, работающий с БД
В его конструкторе - подключение к БД
Его методы добавляют новую запись в таблицу,
обновляет существующую и получает 
имеющийся список записей

Создать абстрактный класс статьи
От него унаследовать класс новости
Переписать предыдущее задание испльзую
классы новостей и БД
*/

require __DIR__ . '/models/photo.php';

$items = Photos_getAll();

include __DIR__ . '/views/index.php';

?>