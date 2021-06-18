<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="icon" href="fav.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="style.css"></link>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
</head>
    <body>
        <div class="container">
            <div class="login-box">
                <div class="row">
                    <div class="col-md-6 login-left">
                        <h2>Login here</h2>
                        <form action="validation.php" method="post">
                            <div class="form-group">
                                <label">Username</label>
                                <input type="text" name="user" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                    <div class="col-md-6 login-right">
                        <h2>Register here</h2>
                        <form action="registration.php" method="post">
                            <div class="form-group">
                                <label">Username</label>
                                <input type="text" name="user" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-success">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>