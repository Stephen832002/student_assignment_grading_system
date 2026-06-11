<?php

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Grade Submission</title>
</head>
<body>

<h2>Grade Submission</h2>

<form action="save_grade.php" method="POST">

<input type="hidden" name="submission_id"
value="<?php echo $id; ?>">

Score:

<input type="number" name="score">

<br><br>

Feedback:

<textarea name="feedback"></textarea>

<br><br>

<button type="submit">
Save Grade
</button>

</form>

</body>
</html>