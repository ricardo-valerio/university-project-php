<?php

include '../includes/config.php';

$estadoUpdate = ($_POST['estado']) ? 0 : 1;

$sql = "UPDATE utilizador SET apagado = " . $estadoUpdate . ' WHERE id = ' . $_POST['id'];

mysql_query($sql);
?>