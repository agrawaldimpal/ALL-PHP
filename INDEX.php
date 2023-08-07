<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">
        Course:<select>
    <?php

    $conn = mysqli_connect("localhost","root","","student") or die("not connect");
    $qury = "SELECT * FROM course";
    $result = mysqli_query($conn,$qury);
    while($row = mysqli_fetch_assoc($result)){

    ?>
          <option value="<?php echo $row["cid"];?>"><?php echo $row["course"];  ?></option>

<?php 
    } 
    mysqli_close($conn);
?>
</select>
    </form>
</body>
</html>