<?php
$db = new SQLite3('my.db');
echo $db->querySingle('SELECT SQLITE_VERSION()');
