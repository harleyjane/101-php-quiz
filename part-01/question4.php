<?php

	include 'quiz.php';

	$current_score = $_GET["current_score"];

	if ($_GET["answer"] == $answers[2]) {
		$current_score += 1;
	}

?>

<!DOCTYPE html>
<html>
 
<head>
<link rel="stylesheet" href="style.css">
	<title></title>
	 <div class="head">
    <h6>4 QUESTIONS</h6>
  </div>
  
  <div class="line">
    <hr></hr>
  </div>
  
</head>
<body>

	<div class="score">
		<?php 
			echo "Your current score is " . $current_score;
		?>
	</div>

	<div class="question">
		<?php echo $quiz[3]; ?>
	</div>

	<div class="answer">
		<form action="finalresult.php">
			<input type="radio" name="answer" value="A">A<br>
			<hr>
			<input type="radio" name="answer" value="B">B<br>
			<hr>
			<input type="radio" name="answer" value="C">C<br>
			<hr>
			<input type="radio" name="answer" value="D">D<br>
			<hr>
			<input class="nextbutton" type="submit" value="Next Question">

			<input type="hidden" name="current_score" value="<?php echo $current_score ; ?>">
		</form>
	</div>


</body>
</html>