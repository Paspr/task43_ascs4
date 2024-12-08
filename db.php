<?php
$servername = "127.0.0.1";
$username = "root";
$password = "12345";
$dbName = "ascs";

$link = mysqli_connect($servername, $username, $password);

if (!$link) {
	die("Ошибка подключения: " . mysqli_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbName";

if (!$mysqli_query($link, $sql)) {
	echo "Не удалось создать БД";
}

mysqli_close($link);


$link = mysqli_connect($servername, $username, $password);

$sql = "CREATE TABLE IF NOT EXISTS users(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
)";

if (!$mysqli_query($link, $sql)) {
	echo "Не удалось создать таблицу users";
}

$sql = "CREATE TABLE IF NOT EXISTS posts(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(20) NOT NULL,
    main_text VARCHAR(400) NOT NULL
)";

if (!$mysqli_query($link, $sql)) {
	echo "Не удалось создать таблицу posts";
}

mysqli_close($link);
?>
