<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
<form action="" method="post">
    <input type="text" name="number" placeholder="Enter number">
    <button style="background-color: dodgerblue; color: white; border: none; border-radius: 20px">Submit</button>
</form>
<?php
$arr = array(3, 4, 6, 7, 1, 8, 2, 0);
if ($_SERVER["REQUEST_METHOD"] == "POST")
    $input = $_REQUEST["number"];
array_push($arr, $input);

sort($arr);
print_r($arr);

?>
</body>
</html>