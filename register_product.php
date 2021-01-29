<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include './db_connection.php';
//include './error_handling.php';
?>
<html>
    <head>
        <meta charset="UTF-8">


        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="login.css">


        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <!--
                <form action="doRegGames.php" method="post">
        
                    id<input type="number" name="id"><br><br>
                    name<input type="text" name="name"><br><br>
                    price<input type="text" name="price"><br><br>
                    img<input type="text" name="img"><br><br>
                    url<input type="text" name="url"><br><br>
                    catagory<select name="catg" >
                        <option name="catg" selected></option>
                        <option name="catg" value="games">games</option>
                        <option name="catg" value="movies">movies</option>
                        <option name="catg" value="songs">songs</option>
                        <option name="catg" value="songs">software</option>
                    </select><br><br>
                    <input type="submit" value="submit">
                </form>
        -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <?php
        // put your code here
        ?>

        <div class="container" style="width: 500px; height: 800px;">

            <form class="row g-3" action="do_register_product.php" method="POST">

                <span for="validationServer01" class="form-label">proID</span>
                <span>  <input type="number" name="id" class="form-control is-valid"  required></span>

                <span for="validationServer01" class="form-label">proName</span>
                <span>  <input type="text" name="pname" class="form-control is-valid" required></span>


                <span for="validationServer01" class="form-label">brand</span>
                <span><input type="text" name="brand" class="form-control is-valid" required></span>


                <span for="validationServer02" class="form-label">price</span>
                <span><input type="text" name="price" class="form-control is-valid" required></span>


                <span for="validationServer01" class="form-label">url</span>
                <span><input type="text" name="imageurl" class="form-control is-valid"required></span>

                <span for="validationServer01" class="form-label">cat</span>
                <span><input type="text" name="category" class="form-control is-valid"required></span>


                <br>





                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>


        <div>
            <table class="table table-dark table-hover">
                <tr>
                    <td>proID</td>
                    <td>pname</td>
                   <td>bname</td>
                    <td>price</td>
                    <td>url</td>
                    <td>cat</td>
                    <td>update</td>
                    <td>#</td>
                </tr>
                <?php
                $query = "SELECT id,pname,brand,price,category,imageurl FROM product";
                $result = $connection->query($query);


                while ($row = $result->fetch_assoc()) {
                    ?>
                <form action="update_product.php" method="POST">
                        <tr>
                            <td><input type="number" name="id" id="id" value="<?php echo $row["id"]; ?>" /></td>
                            
                            <td><input type="text" name="pname" id="username" value="<?php echo $row["pname"]; ?>" /></td>
                            
                            
                            <td><input type="text" name="brand" id="tpno" value="<?php echo $row["brand"]; ?>" /></td>
                            
                            <td><input type="text" name="price" id="img" value="<?php echo $row["price"]; ?>" /></td>
                            
                            <td><input type="text" name="category" id="url" value="<?php echo $row["category"]; ?>" /></td>
                            
                            <td><input type="text" name="imageurl" id="cat" value="<?php echo $row["imageurl"]; ?>" /></td>

                            <td><input type="submit" value="Update" /></td>
                            <td><a href="delete_product.php?id=<?php echo $row["id"]; ?>">delete</a></td>

                        </tr>
                    </form>

                    <?php
                }
                ?>
            </table>
        </div>

    </body>
</html>
