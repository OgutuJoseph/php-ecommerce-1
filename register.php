<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Box Icons Link -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" >
    <link rel="stylesheet" type="text/css" href="style.css" >
    <title>Register</title>
</head>
<body>
    <section class="form-container">
        <form method="post">
            <h1>Register Now</h1>
            <input type="text" name="name" placeholder="Enter Your Name" required > 
            <input type="text" name="email" placeholder="Enter Your Email" required > 
            <input type="text" name="password" placeholder="Enter Your Password" required > 
            <input type="text" name="cpassword" placeholder="Confirm Your Password" required > 
            <input type="subit" class="btn" name="submit-btn" value="Register Now" > 
            <p>Already have an account? <a href="login.php">Login</a> </p>
        </form>
    </section>
</body>
</html>
