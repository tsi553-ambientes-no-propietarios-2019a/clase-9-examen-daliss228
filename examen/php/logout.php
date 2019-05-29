<?php 
include('../common/utils.php');

session_destroy();

header('Location: ../index.php');
exit;

?>
