<?php

echo "Some Shit"
/*
// Соединяемся, выбираем базу данных
$link = mysql_connect('loaclhost', 'admin', 'password')
    or die('Не удалось соединиться: ' . mysql_error());
echo 'Соединение успешно установлено';
mysql_select_db('devcolibri') or die('Не удалось выбрать базу данных');

// Выполняем SQL-запрос
$query = 'SELECT * FROM products';
$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());

// Выводим результаты в html
echo "\<table\>";
echo '<table>';
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "<tr>";
    foreach ($line as $col_value) {
        echo "<td>$col_value</td>";
    }
    echo "</tr>";
}
echo "</table>";

// Освобождаем память от результата
mysql_free_result($result);

// Закрываем соединение
mysql_close($link);*/
?>