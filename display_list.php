<h1>Messages List</h1>
<?php

# connect
require '../database/database.php';
$pdo = Database::connect();

# display link to "create" form
echo "<a href='display_create_form.php'>Create</a><br><br>";

# display all records
$sql = 'SELECT * FROM messages';
foreach ($pdo->query($sql) as $row) {
	$str = "";
	$str .= "<a href='display_read_form.php?id=" . $row['id'] . "'>Read</a> ";
	$str .= "<a href='display_update_form.php?id=" . $row['id'] . "'>Update</a> ";
	$str .= "<a href='display_delete_form.php?id=" . $row['id'] . "'>Delete</a> ";
    $str .= ' (' . $row['id'] . ') ' . $row['message'];
	$str .=  '<br>';
	echo $str;
}
echo '<br />';
