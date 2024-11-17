<?php
// Include the functions file
include 'functions.php';

// Connect to the MySQL database
$pdo = pdo_connect_mysql();

// sql query to get the questions/answers/definitions from table
$sql = "SELECT * from question";

// Use PDO to execute the query and fetch results
$stmt = $pdo->query($sql);

// Initalise the counter variable
$i = 0;


// Title of web page
$title = "Questions";
?>

<?=template_header('Questions Page')?>

<!-- Call Title variable -->
<div class="container mt-4">
<h1 class="text-center"><?= $title ?></h1>
</div>

<?php 
// for as many questions as there are in the database, create an accordion into the webpage
// Fetching rows from the result set
while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
    if ($i == 0) {
      echo '<div class="accordion" id="accordionExample">';
    }
?>

<!-- Accordions -->
<div class="accordion-item">
  <h2 class="accordion-header" id="heading<?php echo $i; ?>">
    <button class="accordion-button collapsed"
            type="button" 
            data-bs-toggle="collapse"
            data-bs-target="#collapse<?php echo $i; ?>"
            aria-expanded="false"
            aria-controls="collapse<?php echo $i; ?>">
      <!-- The title of the accordion on the web page will be the question -->
      <?php echo ($data['Question']); ?>
    </button>
  </h2>
  <div id="collapse<?php echo $i; ?>" class="accordion-collapse collapse"
       aria-labelledby="heading<?php echo $i; ?>" data-bs-parent="#accordionExample">
    <div class="accordion-body">
      <h2>Description: </h2>
      <!-- The body of the accordion on the web page will be the description/answer of the questions -->
      <?php echo ($data['Description']); ?>

      <h3>Answer: </h3>
      <?php echo ($data['Answer']); ?>
    </div>
  </div>
</div>

<?php
// increment
  $i++;
    
  }

// Close the accordion container
if ($i > 0) {
  echo '</div>'; 
}

?>


<?=template_footer()?>
