<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loop — Chocolate Factory</title>
</head>
<body>

<?php include 'header.php'; ?>

<h2>WHILE Loop</h2>

<?php
$chocolates = [
    "Chocolate Nut",
    "Chocolate Snickers",
    "Chocolate Choc",
    "Chocolate Bounty"
];

$i = 0;

while ($i < count($chocolates)) {
    echo "<p> " . $chocolates[$i] . "</p>";
    $i++;
}
?>

<?php include 'footer.php'; ?>

</body>
</html>
