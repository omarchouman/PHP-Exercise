<?php 

$fullname = $username = $password = $password2 = $email = $phone = $birth = $social = $loggedusername = $loggedpassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
   $loggedusername=htmlspecialchars($_POST["loggedusername"]);
   $loggedpassword=htmlspecialchars($_POST["loggedpassword"]);
   $fullname=htmlspecialchars($_POST["fullname"]);
   $username=htmlspecialchars($_POST["username"]);
   $password=htmlspecialchars($_POST["password"]);
   $password2=htmlspecialchars($_POST["password2"]);
   $email=htmlspecialchars($_POST["email"]);
   $phone=htmlspecialchars($_POST["phone"]);
   $birth=htmlspecialchars($_POST["birth"]);
   $social=htmlspecialchars($_POST["social"]);



//    if(empty($_POST["loggedusername"]) || empty($_POST["loggedpassword"])) {
//        header("location:home.php");
//    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged In User</title>
</head>
<body>

    <h1>Hello</h1>

    <h4>Here is Your Info</h4> 

    <div class="dataa">

    <div>
        <p><?php echo $fullname ?></p>
    </div>
    <br>

    <div>
        <p><?php echo $username ?></p>
    </div>
    <br>

    <div>
        <p><?php echo $password ?></p>
    </div>
    <br>

    <div>
        <p><?php echo $email ?></p>
    </div>
    <br>

    <div>
        <p><?php echo $phone ?></p>
    <br>
    </div>

    <div>
        <p><?php echo $birth ?></p>
    </div>
    <br>

    <div>
        <p><?php echo $social ?></p>
    </div>
    <br>

    </div>

  
</body>
</html>

