<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta charset="UTF-8">  
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> 
        <link rel="stylesheet" href="./styles/main.css" />

        <meta name="author" content="Joey Elsisi, Stuart Paine">
        <meta name="description" content="Study Spot Project">
    </head>
    <body>
        <header>
            <div id="top-navbar-placeholder">
                <?php include("top-navbar.php"); ?>
            </div>
        </header>

        <div class="container" style="margin-top: 15px;">
            <div class="row col-xs-8 bcr-name">
                <h1>Account Login</h1>
                <p>Please enter your email and password to login to an existing account.</p>
            </div>
            <div class="row justify-content-center bcr-name">
                <div class="col-4">
                <form action="?command=login" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required/>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required/>
                    </div>
                    <?php 
                    if (strcmp($error_msg, "") != 0)
                    {
                        echo "<div class='alert alert-danger'>" . $error_msg . "</div>";
                    }
                    ?>
                    <div class="text-center">                
                        <button type="submit" class="btn btn-success">Login</button>
                    </div>
                </form>
                </div>
            </div>
            <div class="row justify-content-center bcr-name" style="margin-top: 80px;">
                <div class="col-4">
                    <p>New user?</p>
                    <a class="btn btn-secondary" href="?command=createaccount">Create Account</a>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</html>