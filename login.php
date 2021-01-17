<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <?php include 'includes/header-css.php';?>
    <link rel="stylesheet" href="style.css" type="text/css">



</head>

<body>
<div class="container pt-5">
    <div class="mx-auto card login-form" style="width: 450px">
        <div class="card-body">
            <form class="form-signin">
                <img class="mb-4 mx-auto d-block logo" src="images/logo.png" alt="Logo" width="90" height="90">

                <h3 id="mid" class="mb-3 font-weight-normal">Login</h3>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="pswd">Password:</label>
                    <input type="password" class="form-control" name="password" id="pswd">
                </div>
                <button type="submit" class="btn btn-block btn-primary">Submit</button>
                <p id="mid" class="text-muted pt-5">Copy right HakMe @2021</p>
            </form>
        </div>
    </div>
</div>

</body>
</html>