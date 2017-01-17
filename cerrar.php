<?php
//destruimos las sesiones abiertas y volvemos al index
session_start();
session_destroy();

header('Location: index.php');
?>