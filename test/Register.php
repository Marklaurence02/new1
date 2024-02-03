<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>User Registration</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">

            <?php
            include("config.php");

            if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $age = $_POST['Age'];
                $password = $_POST['password'];

                // Verify if email is unique
                $verify_query = mysqli_query($con, "SELECT Email FROM Users WHERE Email ='$email'");

                if(mysqli_num_rows($verify_query) != 0){
                    echo "<div class='message'>
                            <p>This email is already in use. Please choose another one.</p>
                          </div><br>";
                    echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                } else {
                    // Insert user into the database
                    mysqli_query($con, "INSERT INTO users (Username, Email, Age, Password) VALUES ('$username', '$email', '$age', '$password')") or die("Error Occurred");

                    echo "<div class='message'>
                            <p>Registration Successful</p>
                          </div><br>";
                    echo "<a href='new.php'><button class='btn'>Login Now</button>";
                }
            } else {
            ?>

            <header>Sign Up</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">UserName</label>
                    <input type="text" name="username" id="username" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>

                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="Age" id="Age" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Register">
                </div>

                <div class="link">
                   Already a member? <a href="new.php">Sign in</a>
                </div>
            </form>
            <?php } ?>

        </div>
    </div>
</body>
</html>
