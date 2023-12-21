<?php
session_start();
require_once('./../../models/userModel.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include('./../header.php');

include_once('usersList.php');

echo "dashboard";



include('./../footer.php');
?>
</body>
</html>