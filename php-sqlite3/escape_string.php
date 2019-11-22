<?php
$db = new SQLite3('my.db');

$name  = "O'Reilly";
$escaped_name = SQLite3::escapeString($name);

$db->exec("INSERT INTO people (`name`, `gender`, `age`, `city`, `created_at`) 
    VALUES('$escaped_name','Male',41,'Wien','2/1/2019 2:11 PM');");

$person = $db->querySingle("SELECT name, gender, age FROM people WHERE name LIKE '%{$escaped_name}%'", true);
echo "Name: {$person['name']}, Gender: {$person['gender']}, Age: {$person['age']}";