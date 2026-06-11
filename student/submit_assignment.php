<?php
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Submit Assignment</title>
</head>
<body>

<h2>Submit Assignment</h2>

<form action="save_submission.php" method="POST" enctype="multipart/form-data">

    <input type="hidden" name="assignment_id" value="<?php echo $id; ?>">

    Select File:

    <input type="file" name="file">

    <br><br>

    <button type="submit">
        Upload
    </button>

</form>

</body>
</html>