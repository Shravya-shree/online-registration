<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Submission</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Submitted Details</h2>

    <?php
        echo "<p><strong>Name:</strong> " . $_POST['name'] . "</p>";
        echo "<p><strong>Email:</strong> " . $_POST['email'] . "</p>";
        echo "<p><strong>Phone:</strong> " . $_POST['phone'] . "</p>";
        echo "<p><strong>Course:</strong> " . $_POST['course'] . "</p>";
        echo "<p><strong>Gender:</strong> " . $_POST['gender'] . "</p>";
    ?>

</div>

</body>
</html>