<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Change Profile</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="Home.php"> Logo</a></p>
        </div>
        <div class="right-links">
            <a href="edit.php">Change Profile</a>
            <a href="new.php"><button class="btn">Log out</button></a>
        </div>
    </div>
    <div class="container">
        <div class="box form-box">
            <header>Change Profile</header>
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
                    <input type="Age" name="Age" id="Age" required>
                </div>

                <div class="field">
                    <input type="submit"class="btn" name="submit" value="Update">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
