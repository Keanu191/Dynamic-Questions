<?php
// Include the functions file
include 'functions.php';

// Connect to the MySQL database
$pdo = pdo_connect_mysql();

// Title of web page
$title = "Contact";
?>

<?=template_header('Contact Page')?>

<!-- Call Title variable -->
<div class="container mt-4">
<h1 class="text-center"><?= $title ?></h1>
</div>

<!-- To not make the user have to click on the back arrow on the browser to return to the website add a target _blank to the links to open the websites in a new tab -->
<p><a href="https://www.citems.com.au/contact-us/" target="_blank">Contact our Parent Company</a>
<p><a href="https://www.southmetrotafe.wa.edu.au/contact-us" target="_blank">Contact South Metropolitan TAFE</a>

<?=template_footer()?>
