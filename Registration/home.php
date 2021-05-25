<?php
// another way of storing data we can use a php session but my approach was all variables, variable inputs, variable errors.

// Backend Form Validation
$fullname_error = $username_error = $password_error = $password2_error = $email_error = $phone_error = $birth_error = $social_error = "";
$fullname = $username = $password = $password2 = $email = $phone = $birth = $social = "";


function show_data($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if($_SERVER["REQUEST_METHOD"] == "POST") {

if(empty($_POST["fullname"])) {
    $fullname_error = "Your Fullname is Required Sir";
} else {
    $fullname = show_data($_POST["fullname"]);
    // Check if name contains valid characters only
    if (!preg_match("/^[a-zA-Z-' ]*$/",$fullname)) {
        $name_error = "Only letters and white space allowed Sir";
    }
} 

if(empty($_POST["username"])) {
    $username_error = "Your Username is Required Sir";
} else {
    $username = show_data($_POST["username"]);
}

if(empty($_POST["email"])) {
    $email_error = "Your Email is Important Sir";
} else {
    $email = show_data($_POST["email"]);
    // Check if email is valid 
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Invalid Email Format Sir";
    }
}

if(empty($_POST["password"])) {
    $password_error = "You Can't Have Accounts Without Passwords Sir";
} else {
    $password = show_data($_POST["password"]);
}

if(strcmp($_POST["password"], $_POST["password2"]) !== 0) {
    $password2_error = "Passwords Don't Match Sir";
}

if(empty($_POST["phone"])) {
    $phone_error = "You Have To Provide Your Mobile Number Sir";
} else {
    $phone = show_data($_POST["phone"]);
    // Check if the mobile number is strictly numbers 
    if (!preg_match('/^[0-9]*$/',$_POST['phone'])){
        $phone_error="Mobile Should Strictly Be A Number";
    }
}


if(empty($_POST["social"])) {
    $social_error = "You Have To Provide Your SSN Sir";
} else {
    $social = show_data($_POST["social"]);
}

if(empty($_POST["birth"])) {
    $birth_error = "You Have To Provide Your Birthdate Sir";
} else {
    $birth = show_data($_POST["birth"]);
}



}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Exercise</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    
    <div class="container">

    <section class="signup-form">
        <h1>Signup Here</h1>
        <form method="POST" action="home.php">

        <!-- FullName -->
        <label for="fullname">FullName:</label>
        <input type="text" name="fullname" id="fullname">
        <span class="error"><?php echo $fullname_error; ?></span>
        <!-- FullName -->
        <br>

        <!-- Username -->
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <span class="error"><?php echo $username_error; ?></span>
        <!-- Username -->
        <br>

        <!-- Password -->
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <span class="error"><?php echo $password_error; ?></span>
        <!-- Password -->
        <br>

        <!-- Password Confirmation -->
        <label for="password2">Confirm Password:</label>
        <input type="password" name="password2" id="password2">
        <span class="error"><?php echo $password2_error; ?></span>
        <!-- Password Confirmation -->
        <br>

        <!-- Email -->
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <span class="error"><?php echo $email_error; ?></span>
        <!-- Email -->
        <br>

        <!-- Phone Number -->
        <label for="phone">Phone Number:</label>
        <input type="tel" name="phone" id="phone">
        <span class="error"><?php echo $phone_error; ?></span>
        <!-- Phone Number -->
        <br>

        <!-- Date Of Birth -->
        <label for="birth">Date Of Birth:</label>
        <input type="text" name="birth" id="birth">
        <span class="error"><?php echo $birth_error; ?></span>
        <!-- Date Of Birth -->
        <br>
        <!-- Social Security Number -->
        <label for="social">Social Security Number:</label>
        <input type="text" name="social" id="social">
        <span class="error"><?php echo $social_error; ?></span>
        <!-- Social Security Number -->
        <br>

        <button type="submit" class="submit">Sign Up</button>

        </form>
    
    </section>

    <div class="vertical-line"></div>

    <section class="login-form">
        <h1>Login Here</h1>
        <form method="POST" action="safe.php">
            <!-- Username -->
            <label for="login-username">Username:</label>
            <input type="text" name="login-username" id="login-username">
            <!-- Username -->
            <br>
            <!-- Password -->
            <label for="login-password">Password:</label>
            <input type="password" name="login-password" id="login-password">
            
            <br>

            <!-- Hidden Input Variables to echo the user data -->
            <input type="hidden" name="fullname" value=<?php echo $fullname?>>
            <input type="hidden" name="username" value=<?php echo $username?>>
            <input type="hidden" name="password" value=<?php echo $password?>>
            <input type="hidden" name="password2" value=<?php echo $password2?>>
            <input type="hidden" name="email" value=<?php echo $email?>>
            <input type="hidden" name="phone" value=<?php echo $phone?>>
            <input type="hidden" name="birth" value=<?php echo $birth?>>
            <input type="hidden" name="social" value=<?php echo $social?>>
            <button type="submit" class="submit"> Sign In! </button>
                
        </form>
    </section>

    </div>
</body>
</html>