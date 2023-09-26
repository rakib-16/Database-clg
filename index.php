<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>database connection</title>
</head>
<body>
    <?php
    include "database/database.php";
    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    echo $num;
    ?>
    
</body>
</html>

    
    
