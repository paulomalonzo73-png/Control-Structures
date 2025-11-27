<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Else — Chocolate Factory</title>
</head>
<body>

<?php include 'header.php'; ?>

<h2>IF and ELSE</h2>

<?php
$choco = "Chocolate Snickers";

echo "<p>You selected: <strong>$choco</strong></p>";

if ($choco == "Chocolate Nut") {
    echo "<p>Chocolate Nut is available!</p>";
    echo "<p>This is a crunchy nut-filled chocolate treat.</p>";
} else {
    echo "<p>$choco is available and on promo!</p>";
    echo "<p>Enjoy caramel, nougat, and peanuts wrapped in rich chocolate.</p>";
}

echo "<p>Thank you for checking our inventory!</p>";
?>

<?php include 'footer.php'; ?>

</body>
</html>
