
<?php
include './db_connection.php';
//include './error_handling.php';

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- <link type="text/css" rel="stylesheet" href="bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="bootstrap.css">
    <link type="text/css" rel="stylesheet" href="bootstrap-grid.css">
    <link type="text/css" rel="stylesheet" href="bootstrap-grid.min.css">
    <link type="text/css" rel="stylesheet" href="bootstrap-grid.rtl.css">
    <link type="text/css" rel="stylesheet" href="bootstrap-grid.rtl.min.css">
    <link type="text/css" rel="stylesheet" href="bootstrap-reboot.min.css">
    <link type="text/css" rel="stylesheet" href="bootstrap-reboot.rtl.min.css">
    <link type="text/css" rel="stylesheet" href="bootstrap-utilities.min.css">
    <link type="text/css" rel="stylesheet" href="bootstrap-utilities.rtl.min.css">-->

    <?php
        $keywords = "";
        if (isset($_GET['keywords'])) {
            $keywords = $_GET['keywords'];
        }
    ?>

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<form method="get" action="search.php" />
<input type="text" name="keywords" id="keywords" placeholder="Search here" style="width: 420px; outline: none; height: 50px;background-color: #fff;" />
<input type="submit"  class="btn btn-primary" value="SEARCH"  />

</form>


<?php
$query = "SELECT * FROM product WHERE pname  LIKE '%".$keywords."%' ";
$result = $connection->query($query);

while ($row = $result->fetch_assoc()) {
    ?>

    <div class="card p-3 mb-2 bg-light text-xxl-center" style="max-width: 1300px;">
        <div class="row g-0">

            <div class="col-md-4">
                <img src="<?php echo $row["imageurl"]; ?>" style="max-width: 400px; max-height: 300px;" >
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row["pname"]; ?></h5>
                    <p class="card-text"><?php echo $row["price"]; ?></p>

                </div>

            </div>
        </div>
    </div>
    <?php
}
?>



</body>
</html>