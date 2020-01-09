<?php require_once 'config.php'; ?>
	<?php require_once DBAPI; ?>	
<?php
$db = openDatabase();
if ($db) {
    echo '<h1>Conected!</h1>';
} else {
    echo '<h1>ERROR: Not connected!</h1>';
}    ?>