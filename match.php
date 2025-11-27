<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Match — Chocolate Factory</title>
</head>
<body>

<?php include 'header.php'; ?>

<h2>MATCH Statement</h2>

<?php
$choco = "Chocolate Bounty";

echo "<p>You selected: <strong>$choco</strong></p>";

$category = match($choco) {
    "Chocolate Nut"      => "Nutty Chocolate — Crunchy and flavorful.",
    "Chocolate Snickers" => "Caramel & Nuts — A perfect energy bar.",
    "Chocolate Choc"     => "Pure Milk Chocolate — Smooth and creamy.",
    "Chocolate Bounty"   => "Coconut Chocolate — Sweet and tropical.",
    default              => "Unknown chocolate — Not in our list.",
};

echo "<p>Category: $category</p>";
?>

<?php include 'footer.php'; ?>

</body>
</html>
