<?php 
if(!$_SESSION['user']) {
    header("Location: index.html");
    exit();
}
?>