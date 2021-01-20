
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include './db_connection.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="login.css">



    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <?php
        // put your code here
        ?>

        <div class="container" style="width: 500px; height: 800px;">
            <!-- Content here -->
            <form class="row g-3" action="cus_register.php" method="POST">

                <span for="validationServer01" class="form-label">Name</span>
                <span>  <input type="text" name="inName" class="form-control is-valid" id="inName"  required></span>
                <span for="validationServer02" class="form-label">Email</span>
                <span><input type="text" name="inEmail" class="form-control is-valid" id="inEmail" required></span>
                <span for="validationServer01" class="form-label">Address</span>
                <span> <input type="text" name="inAddress" class="form-control is-valid" id="inAddress"  required></span>
                <span for="validationServer01" class="form-label">Mobile</span>
                <span><input type="tel" name="inMobile" class="form-control is-valid" id="inMobile"  required></span>
                <span for="validationServer01" class="form-label">Zipcode</span>
                <span><input type="text" name="inZipcode" class="form-control is-valid" id="inZipcode"  required></span>
                <span for="validationServer01" class="form-label">Password</span>
                <span>  <input type="text" name="inPassword" class="form-control is-valid" id="inPassword"  required></span>

                <br>





                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </form>
        </div>


        <div>
            <table class="table table-dark table-hover">
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Address</td>
                    <td>Mobile number</td>
                    <td>Zip code</td>
                    <td>Password</td>
                    <!--<td>type</td>-->
                    <td>update</td>
                    <td>#</td>
                </tr>
                <?php
                $query = "SELECT id,first_name,last_name,username,birthday,email,password FROM user";
                $result = $connection->query($query);

 while ($row = $result->fetch_assoc()) {
                    ?>
                    <form action="updateuser.php" method="POST">
                        <tr>
                            <td><input type="text" name="ID" id="ID" value="<?php echo $row["ID"]; ?>" /></td>
                            <td><input type="text" name="Name" id="Name" value="<?php echo $row["Name"]; ?>" /></td>
                            <td><input type="email" name="Email" id="Email" value="<?php echo $row["Email"]; ?>" /></td>
                            <td><input type="text" name="Address" id="Address" value="<?php echo $row["Address"]; ?>" /></td>
                            <td><input type="tel" name="Mobile number" id="Mobile number" value="<?php echo $row["Mobile number"]; ?>" /></td>
                            <td><input type="email" name="email" id="email" value="<?php echo $row["email"]; ?>" /></td>
                            <td><input type="password" name="password" id="password" value="<?php echo $row["password"]; ?>" /></td>
                            <td><input type="submit" value="Update" /></td>
                            <td><a href="deleteUser.php?id=<?php echo $row["id"]; ?>">delete</a></td>

                        </tr>
                    </form>

                    <?php
                }
                ?>
            </table>
        </div>


    </body>
</html>