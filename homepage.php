<?php
session_start();
require(connect.php);
/*Search Engine */
/*Active Visitors Handler  */
/*Active Visitors Handler  */
$activeVisitors=0;
$activeusercount= " SELECT* FROM admin";
$totalnumber=mysqli_num_rows('$activeusercount');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class= 'dashboard' style='items-align:center; text-align: center'>
        <P>Active Users are <? echo $totalnumber ;?>
    </div>
</body>
</html>