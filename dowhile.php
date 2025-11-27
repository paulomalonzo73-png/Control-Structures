<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do While Loop — Chocolate Factory</title>
</head>
<body>

<?php include 'header.php'; ?>

<h2>DO WHILE Loop</h2>

<?php
$counter = 1;

echo "<p>Displaying chocolate batches produced today:</p>";

do {
    echo "<p>Batch $counter: Fresh chocolate made!</p>";
    $counter++;
} while ($counter <= 5);

echo "<p>The DO WHILE loop guarantees the message appears at least once.</p>";
?>

<?php include 'footer.php'; ?>

</body>
</html>
