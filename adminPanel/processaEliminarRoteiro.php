<?php

include '../includes/config.php';

$id_get_parametro = mysql_real_escape_string($_GET['id']);

$sql = "DELETE FROM roteiro WHERE id = " . $id_get_parametro;

?>

<?php if (mysql_query($sql)): ?>

	<?php echo "roteiro eliminado com sucesso! redireccionar" ?>

<?php else: ?>
	<?php echo "insucesso " . mysql_error(); ?>
<?php endif ?>