<?php
// Include the functions file
include 'functions.php';

// Connect to the MySQL database
$pdo = pdo_connect_mysql();

// Title of web page
$title = "Home";


?>

<?=template_header('Home Page')?>

<!-- Call Title variable -->
<div class="container mt-4">
<h1 class="text-center"><?= $title ?></h1>
</div>

<?=template_footer()?>

