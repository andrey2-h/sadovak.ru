<?php

$conn = pg_connect("host=localhost dbname=php_site user=php_user password=123");
if (!$conn) {
    die("Ошибка подключения: " . pg_last_error());
}
echo "Подключение к PostgreSQL успешно!";
pg_close($conn);

?>