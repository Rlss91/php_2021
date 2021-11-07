<?php 
    session_set_cookie_params(60*60*24);
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session login page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Login page</h1>
        <form method="POST" action="auth.php">
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" name="email">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" name="password">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword4" class="col-sm-2 col-form-label">Remember me</label>
                <div class="col-sm-10">
                <!-- <input type="checkbox" class="form-control" id="inputPassword4" name="rememberme"> -->
                <input type="checkbox"  id="inputPassword4" name="rememberme">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <?php if(isset($_SESSION['login_err']) && $_SESSION['login_err']): ?>
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
            <div class="card-header">Login Error</div>
            <div class="card-body">
                <!-- <h5 class="card-title">Danger card title</h5> -->
                <p class="card-text"><?=$_SESSION['login_err']?></p>
            </div>
        </div>
        <?php unset($_SESSION['login_err']) ?>
        <?php endif; ?>
    </div>
</body>
</html>