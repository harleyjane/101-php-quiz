<?php

	include 'quiz.php';

?>
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="style.css">
 <div class="head">
    <h6>4 QUESTIONS</h6>
  </div>
  
  <div class="line">
    <hr></hr>
  </div>
  
	<title></title>
</head>
<body>

	<div class="question">
		<?php echo $quiz[0]; ?>
	</div>

	<div class="answer">
		<form action="question2.php">
			<input type="radio" name="answer" value="A">A<br>
			<input type="radio" name="answer" value="B">B<br>
			<input type="radio" name="answer" value="C">C<br>
			<input type="radio" name="answer" value="D">D<br>
			<input type="submit" value="Next Question">
		</form>
	</div>

</body>
</html>