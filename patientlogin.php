<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <a href="index.php">
            <div class="logo">
                <img src="assets/logo/mtlogo.png" alt="Logo">
            </div>
        </a>
        
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            
            <li class="dropdown">
                <a href="#">Log in</a>
                <div class="dropdown-content">
                    <a href="">Patient</a>
                    <a href="#">Admin</a>
                    <a href="#">Staff</a>
                    <a href="#">Driver</a>
                </div>
            </li>
            <li><a href="signup.php">Sign up</a></li>
        </ul>
    </nav>

    <div class="signup-container">
    <div class="signup-form">
    <h2>Log In</h2>
    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Log In</button>
    <br>
    <br>
    <a href="forgotpass.php"><p>Forgot Password?</p></a>    
</div>

    </div>

  
</body>
</html>