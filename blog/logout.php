<?php
session_start();?>

<?php
session_unset();  //26.11.2019 
session_destroy();
header('Location: index.php');

?>
