<?php
$a = "hello";
$$a = "world";
echo $a."<br>";
echo $$a."<br>";
echo $hello."<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php echo "<h1>gia tri cua a=$a</h1>;"?>
<?php echo "<h1>gia tri cua a={$$a}</h1>;"?>
<?php echo "<h1>gia tri cua a={$hello}</h1>;"?>

</body>
</html>

