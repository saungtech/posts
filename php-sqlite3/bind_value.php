<?php
$db = new SQLite3('my.db');

$stmt = $db->prepare("INSERT INTO people 
    (`name`, `gender`, `age`, `city`, `created_at`)
    VALUES(:name, :gender, :age, :city, :created_at);");

$stmt->bindValue(':name', 'Rick Martin', SQLITE3_TEXT);
$stmt->bindValue(':gender', 'Male', SQLITE3_TEXT);
$stmt->bindValue(':age', 59, SQLITE3_INTEGER);
$stmt->bindValue(':city', 'New Orleans', SQLITE3_TEXT);
$stmt->bindValue(':created_at', '1/11/2019 5:26 PM', SQLITE3_TEXT);
$stmt->execute();

$stmt->bindValue(':name', 'Peter Wilson', SQLITE3_TEXT);
$stmt->bindValue(':gender', 'Male', SQLITE3_TEXT);
$stmt->bindValue(':age', 55, SQLITE3_INTEGER);
$stmt->bindValue(':city', 'Louisville', SQLITE3_TEXT);
$stmt->bindValue(':created_at', '1/19/2019 7:13 AM', SQLITE3_TEXT);
$stmt->execute();

