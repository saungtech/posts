<?php
$db = new SQLite3('my.db');

$sql = "CREATE TABLE `people` (
  `id`	INTEGER PRIMARY KEY AUTOINCREMENT,
  `name`	TEXT,
  `gender`	TEXT,
  `age`	INT,
  `city`	TEXT,
  `created_at`	TEXT
)";
// $db->exec($sql);

$db->exec("INSERT INTO people (`name`, `gender`, `age`, `city`, `created_at`) 
    VALUES ('Caydence Dillon','Female',NULL,'Amarillo','3/30/2019 4:37 PM');");
$db->exec("INSERT INTO people (`name`, `gender`, `age`, `city`, `created_at`) 
    VALUES ('Doug Baldwin','Male',52,'Indianapolis','1/24/2019 1:38 PM');");
$db->exec("INSERT INTO people (`name`, `gender`, `age`, `city`, `created_at`) 
    VALUES ('David Janes','Male',62,'Anaheim','2/11/2019 8:07 AM');");

$last_row_id = $db->lastInsertRowID();
echo "The last inserted row ID is $last_row_id \n";