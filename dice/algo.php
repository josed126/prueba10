<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hand Rolling Dice</title>
</head>
<body>
<?php
$roll = rand(1,10);
$roll2 = rand(1,10);
$image = "corazon/carta" . $roll . ".png";
$image2 = "corazon/carta" . $roll2 . ".png";

?>
<input type="button" value="Roll the dice" onclick="window.location.reload()">
<p>
    <img src="<?= $image ?>" alt="<?= $roll ?>" onclick="window.location.reload()">
    <img src="<?= $image2 ?>" alt="<?= $roll2 ?>" onclick="window.location.reload()">
</p>
<p><h1>Hight value: <?=(max($roll,$roll2))?> </h1>

</p>
</body>
</html>