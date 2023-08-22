<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up | MediTracker</title>
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
        <form class="signup-form">
            <h2>Sign Up</h2>
            <label for="username">First Name</label>
            <input type="text" id="username" name="username" required>

            <label for="username">Last Name</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            
            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" name="dob" required>

            <label for="bloodType">Blood Type</label>
            <select id="bloodType" name="bloodType" required>
                <option value="" disabled selected>Select your blood type</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Sign Up</button>
        </form>
    </div>
</body>
</html>