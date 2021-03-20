<?php

$name = $_POST["name"];
$mail = $_POST["mail"];

echo $name."<br>";
echo $mail."<br>";

$text = $_POST["text"];
$a = $_POST["a"];

echo $text."<br>";
echo $a."<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <p><?php echo $text?></p>
    </div>
    <h2><?php echo $name ?>さんのページ</h2>
</body>
</html>