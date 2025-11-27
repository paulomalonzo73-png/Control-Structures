<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch — Chocolate Factory</title>
</head>
<body>

<?php include 'header.php'; ?>

<h2>SWITCH Statement</h2>

<?php
$choice = "Chocolate Choc";

echo "<p>Checking price for: <strong>$choice</strong></p>";

switch ($choice) {
    case "Chocolate Nut":
        echo "<p>Chocolate Nut — ₱45</p>";
        echo "<p>Crunchy and nutty.</p>";
        break;
    case "Chocolate Snickers":
        echo "<p>Chocolate Snickers — ₱55</p>";
        echo "<p>Caramel + nougat + peanuts.</p>";
        break;
    case "Chocolate Choc":
        echo "<p>Chocolate Choc — ₱60</p>";
        echo "<p>Classic milk chocolate.</p>";
        break;
    case "Chocolate Bounty":
        echo "<p>Chocolate Bounty — ₱50</p>";
        echo "<p>Coconut-filled chocolate bar.</p>";
        break;
    default:
        echo "<p>Unknown chocolate type.</p>";
}

echo "<p>Browse other chocolates in the menu!</p>";
?>

<?php include 'footer.php'; ?>

</body>
</html>
