<?php


$mysqli = new MySQLi('localhost', 'root', '', 'gameLibrary');

$sql = <<< SQL
    INSERT INTO `Reviews` (
        `Title`,
        `Body`,
        `Likes`
        
    ) VALUES (
        ?, ?, ?
    );
SQL;
$Likes = filter_input(INPUT_POST, `Likes`, FILTER_SANITIZE_STRING);

$stmt = $mysqli->prepare($sql);
if ($stmt === false) {
    die('Could not prepare SQL: '.$mysqli->error);
}





?>