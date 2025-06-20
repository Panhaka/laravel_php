
<?php
session_start();
if (isset($_SESSION['errors'])){
    $errors = $_SESSION['errors'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register page</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
    <div class="container">
        <h1 class="form-title">
            Register
        </h1>
        
        <form method="Post" action="user-account.php">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="name" id="name" placeholder="name" required>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="name" placeholder="name" required>
            </div>
            <div class="input-group password">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="password" required>
                
            </div>
            <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="confirm_password"  placeholder="confirm_password" required>
        </div>
        <input type="submit" class="btn" value="Sign Up" name="signup">
        </form> 
        <p class="or">
            ------or------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>
                Already Have Account?
            </p>
            <a href="index.php">Sign In</a>

        </div>
    </div>
    
</body>
</html>