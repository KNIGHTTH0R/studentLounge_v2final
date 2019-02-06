<?php
SESSION_start();
session_unset();
SESSION_destroy();
header("Location: ../index.php");
?>