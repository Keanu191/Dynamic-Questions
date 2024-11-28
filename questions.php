<?php
// Include the functions file
include 'functions.php';

// Connect to the MySQL database
$pdo = pdo_connect_mysql();

// sql query to get the questions/answers/definitions from table
$selectAllFields = "SELECT * from Question";

// Use PDO to execute the query and fetch results
$stmt = $pdo->query($selectAllFields);

// Initalise the counter variable
$i = 0;


// Title of web page
$title = "Questions";

// Method to dynamically get every question ID in the database to display
function getQuestionID($pdo)
{
  // query to get every existing question ID in the question table in the MySQL database
  $questionNameQuery = $pdo->prepare("SELECT Question_ID FROM Question");
  // execute query
  $questionNameQuery->execute();

  // for as many questions as there are in the database, create a dropdown item in the bootstrap dropdown button
  while ($data = $questionNameQuery->fetch(PDO::FETCH_ASSOC)) {
    // echo the dropdown item, set the ID for each dropdown item dynamically
    echo "<li><a class='dropdown-item' href='?question_id=" . $data['Question_ID'] . "'>Question: " . $data['Question_ID'] . "</a></li>";
}


}

?>

<?=template_header()?>

<!-- Call Title variable -->
<div class="container mt-4">
<h1 class="text-center"><?= $title ?></h1>
</div>

<!-- dynamic dropdown -->
<div class="dropdown-center">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Select Question:
  </button>
  <ul class="dropdown-menu">
    <!-- call getQuestion method to show the questions in the dropdown -->
    <?php getQuestionID($pdo) ?>
  </ul>
</div>

<?php
// Retrieve the Question_ID from the URL if it's set
$id = (isset($_GET['question_id']) ? $_GET['question_id'] : ''); // Changed to lowercase 'question_id'

// method to display the dynamic accordion
function displayAccordion($pdo, $id)
{
  // SQL query to get the specific question ID
  $selectQuestionQuery = $pdo->prepare("SELECT * FROM Question WHERE Question_ID = ?");
  // Execute the id variable
  $selectQuestionQuery->execute([$id]);
  // fetch
  $questionData = $selectQuestionQuery->fetch(PDO::FETCH_ASSOC);


  if ($questionData) {
    // Display the accordion with the question/definition and answer
    echo "<div class='accordion' id='accordionExample'>";
    echo "<div class='accordion-item'>";
    echo "<h2 class='accordion-header' id='headingOne'>";
    echo "<button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseOne' aria-expanded='false' aria-controls='collapseOne'>";
    echo "" . ($questionData['Question']); // display the question name outside of the accordion
    echo "</button>";
    echo "</h2>";
    echo "<div id='collapseOne' class='accordion-collapse collapse' aria-labelledby='headingOne' data-bs-parent='#accordionExample'>";
    echo "<div class='accordion-body'>";
    // Display the question's definition and answer when the accordion is collapsed
    echo "<strong>Definition:</strong> " .($questionData['Description']) . "<br>"; // display Description
    echo "<strong>Answer:</strong> " . ($questionData['Answer']) . "<br>"; // display answer
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
  } else {
    echo "FATAL ERROR: The SQL Database could not be found, the questions cannot be loaded!";
  }
}

/* 28/11/2024 NOTE TO SELF TO MAKE THIS A PORTFOLIO PROJECT IN THE FUTURE: In the switch case I would like to do if the case is 10 or above look for the QuestionID 
and if it exists display the accordion with the info and if not then output a message and also recycle AT2's code to allow CRUD functions to create questions
*/


// 28/11/2024: we have 9 questions so doing 9 if statements for each of the ID's is bad practice so I will do a switch case
// call displayAccordion method for each case making sure to initalise the pdo and id parameter variables
switch ($id) {
  case '1':
    displayAccordion($pdo, $id);
    break;
  case '2':
    displayAccordion($pdo, $id);
    break;
  case '3':
    displayAccordion($pdo, $id);
    break;
  case '4':
    displayAccordion($pdo, $id);
    break;
  case '5':
    displayAccordion($pdo, $id);
    break;
  case '6':
    displayAccordion($pdo, $id);
    break;
  case '7':
    displayAccordion($pdo, $id);
    break;
  case '8':
    displayAccordion($pdo, $id);
    break;
  case '9':
    displayAccordion($pdo, $id);
    break;
  default:
  
}
?>


<?=template_footer()?>
