<?php
 
$name = 'Sergey';
$favorites = ['Chocolate','Tofe', 'Fudge',];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Welcome <?= $name ?></h2>
    <p>Your favorite type of candy is:
        <?= $favorites[2] ?>
</p>
</body>
</html>