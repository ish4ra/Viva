<?php
include './db_connection.php';
?>

<head>
    <title>View product</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">

    <?php

    $pid = $_GET['pid'];

    ?>
    <link type="text/css" rel="stylesheet" href="css/bootstrap-reboot.css"/>
    <link type="text/css" rel="stylesheet" href="css/bootstrap-grid.css"/>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
    <link type="text/css" rel="stylesheet" href="style.css"/>
</head>





<body style="background-color: #dfdff0;">

<?php
$query = "SELECT * FROM books where id = '".$pid."'";
$result = $connection->query($query);
while($row = $result->fetch_assoc()){

?>
<div style="width:900px;height: 400px;background-color: white;margin-left: 80px;margin-top: 80px; ">
    <div>
        <img class="img" src="productImage/<?php echo $row["imageurl"];?>">
    </div>
    <div style="margin-left: 300px; margin-top: -200px;">

        <label style="  color: black; font-size: 32px;"> <?php echo $row["title"];?></label><br>
        <label style="  color: black; font-size: 32px;"> RS. <?php echo $row["sellPrice"];?> </label> <br><br><br>
        <button class="btn btn-primary btn-lg viewbtbuy1">Buy Now!</button>
        <button class="btn btn-primary btn-lg viewbtcart1">Add to cart</button>

    </div>
</div>
<div  style="width:500px;height: 400px;background-color: white;margin-left: 80px;margin-top: 80px;">
    <h2>Details</h2>
    <label> Title :<?php echo $row["title"];?></label><br><br>
    <label > ISBN :<?php echo $row["ISBN"];?></label><br><br>
    <label >Author :<?php echo $row["author"];?></label><br><br>
    <label>Publisher :<?php echo $row["publisher"];?></label><br><br>





    <?php
    }
    ?>
</div>
<a href="index.php">Home</a>

</body>