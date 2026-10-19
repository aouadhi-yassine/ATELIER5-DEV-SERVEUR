<?php
session_start();
$var = $_SESSION['pseudo'];
session_unset();
session_destroy();
header('Refresh: 5; url=merci.php?nom='.$var);
?>