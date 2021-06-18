<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="home.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="style.css"></link>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <a class="float-right" href="logout.php">Logout</a>
        <h1>Welcome <i style="color: red;"><?php echo $_SESSION['username']; ?></i></h1>
    </div>
</body>
</html>