<html>

<head>
    <meta charset="utf-8">
    <title>read</title>
</head>

</html>

<?php
$data = file_get_contents('data/data.txt');
echo nl2br($data);
?>