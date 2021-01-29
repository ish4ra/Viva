<!DOCTYPE html>

<?php
include './db_connection.php';
include './error_handling.php';
?>

<html>
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

<h1>this is usermanager</h1>
<?php
// put your code here
?>
<div class="container" style="width: 500px; height: 800px;">
    <!-- Content here -->
    <form class="row g-3" action="doregister.php" method="POST">

        <span for="validationServer01" class="form-label">Username</span>
        <span>  <input type="text" name="inUsename" class="form-control is-valid" id="inUsename"  required></span>
        <span for="validationServer02" class="form-label">Email</span>
        <span><input type="text" name="inEmail" class="form-control is-valid" id="inEmail" required></span>
        <span for="validationServer01" class="form-label">Password</span>
        <span> <input type="text" name="inPassword" class="form-control is-valid" id="inPassword"  required></span>

        <br>


        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>
</div>




<div>
    <table class="table table-dark table-hover">
        <tr>
            <td>Id</td>
            <td>Username</td>
            <td>Email</td>
            <td>Password</td>

            <!--<td>type</td>-->
            <td>update</td>
            <td>#</td>
        </tr>
        <?php
        $query = "SELECT id,username,email,password FROM admin";
        $result = $connection->query($query);





        while ($row = $result->fetch_assoc()) {
            ?>
            <form action="updateuser.php" method="POST">
                <tr>
                    <td><input type="text" name="Id" id="Id" value="<?php echo $row["id"]; ?>" /></td>
                    <td><input type="text" name="Username" id="Username" value="<?php echo $row["username"]; ?>" /></td>
                    <td><input type="text" name="Email" id="Email" value="<?php echo $row["email"]; ?>" /></td>
                    <td><input type="text" name="Password" id="Password" value="<?php echo $row["password"]; ?>" /></td>

                    <!-- <td><input type="email" name="type" id="type" value="<?php echo $row["type"]; ?>" /></td>-->
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