<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Else If — Chocolate Factory</title>
</head>
<body>

<?php include 'header.php'; ?>

<h2>IF ELSEIF</h2>

<?php
$customer_choice = "Chocolate Choc";

echo "<p>Customer selected: <strong>$customer_choice</strong></p>";

if ($customer_choice == "Chocolate Nut") {
    echo "<p>Chocolate Nut is a crunchy favorite!</p>";
} elseif ($customer_choice == "Chocolate Snickers") {
    echo "<p>Chocolate Snickers is our top energy bar!</p>";
} elseif ($customer_choice == "Chocolate Choc") {
    echo "<p>Chocolate Choc is smooth and creamy.</p>";
} else {
    echo "<p>Sorry, that chocolate is not available.</p>";
}

echo "<p>Thanks for checking our chocolate selection!</p>";
?>

<?php include 'footer.php'; ?>

</body>
</html>
