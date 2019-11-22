<?php
$db = new SQLite3('my.db');

$stmt = $db->prepare("INSERT INTO people 
    (`name`, `gender`, `age`, `city`, `created_at`)
    VALUES(:name, :gender, :age, :city, :created_at);");
$stmt->bindParam(':name', $name, SQLITE3_TEXT);
$stmt->bindParam(':gender', $gender, SQLITE3_TEXT);
$stmt->bindParam(':age', $age, SQLITE3_INTEGER);
$stmt->bindParam(':city', $city, SQLITE3_TEXT);
$stmt->bindParam(':created_at', $created_at, SQLITE3_TEXT);

$name = 'Abdul Radley';
$gender = 'Male';
$age = 57;
$city = 'Fremont';
$created_at = '9/18/2019 2:56 PM';
$stmt->execute();

$name = 'Daron Reyes';
$gender = 'Male';
$age = 37;
$city = 'Las Vegas';
$created_at = '6/6/2019 3:44 PM';
$stmt->execute();

