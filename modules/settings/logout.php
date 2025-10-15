<?php
session_start(); //a retirer avant distribution    
session_destroy();
header("Location: /");
exit();
?>