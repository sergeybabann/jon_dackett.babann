<?php 

$nutrition = [
    'жиры' => 42,
    'сахар' => 60,
    'соль' => 3.5,
    'протеин' => 2.6,
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>The Candy Store</h1>
<h2>Nutrition (per 100g)</h2>
<p>Fat: <?php echo $nutrition['жиры']; ?>%</p> 
<p>Sugar: <?php echo $nutrition['сахар']; ?>%</p>
<p>Salt: <?php echo $nutrition['соль']; ?>%</p>
<p>Protein: <?php echo $nutrition['протеин']; ?>%</p>
</body>
</html>



