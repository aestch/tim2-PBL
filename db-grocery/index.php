<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Shopping Organizer</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">

    <style type="text/css">
        .open{
            font-family: 'Nunito', sans-serif;
        }
    </style>
   
</head>
<body style="background: #fd7e14;">
    <form action="login.php" method="POST">
        <?php
        if(isset($_GET['pesan'])) {
            if($_GET['pesan'] == "gagal") {
                echo '<div class="alert alert-danger">Login Gagal</div>';
            } else if($_GET['pesan'] == "logout") {
                echo '<div class="alert alert-success">Berhasil Logout</div>';
            }
        }
        
        ?>
    <div class="card shadow col-4 offset-4 mt-5"><br>
        <div class="card-body">
            <h2 class="card-title text-center mb-3" style="margin-top: 10px;">LOGIN NOW</h2>
            <input type="email" name="email" class="form-control mb-3" required placeholder="Email">
            <input type="password" name="password" class="form-control mb-3" required placeholder="Password">
            <div class="pass">Forgot Password</div>
            <button class="btn btn-warning col-4 offset-4">Login</button>
            <div class="signup_link">Don't Have Account?
                <a href="register.html">Sign Up</a>
            </div>
        </div>
    </div>

    </form>
</body>
</html>