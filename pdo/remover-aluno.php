<?php

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$preparedStatement = $pdo->prepare('DELETE FROM students WHERE id = ?;');
$preparedStatement-> bindValue(1, 2, PDO::PARAM_INT);   //Definindo que o parametro é INT e não STRING
var_dump($preparedStatement->execute());

$preparedStatement-> bindValue(1, 5, PDO::PARAM_INT);
var_dump($preparedStatement->execute());