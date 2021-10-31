<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php 
    
    //get, post

    if(isset($_COOKIE['rememberme'])){
        echo $_COOKIE['rememberme'];
    }
    
    ?>
    <div class="container">
        <form action="controller.php" method="get">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value=<?=isset($_COOKIE['email'])?$_COOKIE['email']:''?>>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <div class="mb-3 form-check">
                <?php 
                    if(isset($_COOKIE['rememberme']) && $_COOKIE['rememberme']){
                        echo "<input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\" name=\"rememberme\" checked />";
                    }else{
                        echo "<input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\" name=\"rememberme\" />";
                    }
                ?>
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
</body>
</html>