<?php
$dsn = 'pgsql:host=pg;dbname=hw3';
$user = 'sergei';
$password = 'tolkachev';

try {
$pdo = new PDO($dsn,$user,$password);
} catch (PDOException $e){
    echo 'Проверьте настройки подключения к базе данных:' . $e->getMessage();
}
phpinfo();