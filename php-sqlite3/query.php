<?php
$db = new SQLite3('my.db');

$name = $db->querySingle('SELECT name FROM people WHERE id=2');
echo "Name: $name";

echo "\n";

$person = $db->querySingle('SELECT name, gender, age FROM people WHERE id=3', true);
echo "Name: {$person['name']}, Gender: {$person['gender']}, Age: {$person['age']}";

echo "\n";


$res = $db->query("SELECT id, name, gender, age FROM people");
while ($row = $res->fetchArray()) {
    echo "{$row['id']}. {$row['name']}: {$row['gender']} {$row['age']} \n";
}