<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bg.css">
</head>
<body>
    <div class="bg">
        <nav>
            <a href="" id="logins">Login</a>
            <a href="" id="signups">Signup</a>
        </nav>
        <button onclick="function1()">Start the Quiz</button>
    </div>
    <div id="signup" id="innerbox">
    <p id="demo" style="text-align:center;font-size:40px;font-weight:500;color:white"></p>
        <div class="innerbox" id="innerbox">
            <h1>Sign Up</h1>
            <form action="register.php" method="post" class="form">
                <input type="text" placeholder="Username" name="username"/>
                <input type="email" placeholder="Email" name="email" />
                <input type="text" placeholder="Password" name="password" id="password" />
                <input type="text" placeholder="Confirm Password" name= "confirmpassword" id="confirmpassword" onchange="check()"/>
                <p style="color:red;font-size:15px" id="passcheck"></p>
                <input type="submit" value="Sign Up">
               <p> Already have an account?
            <span style="color:blue;text-decoration:underline;" onclick="show()">Login</span></p>
            </form>
        </div>
    </div>
    <div id="login">
    <div class="innerbox" id="innerbox">
        <h1>Login</h1>
        <form action="validation.php" method="post">
             <input type="email" placeholder="Email" name="email" />
             <input type="text" placeholder="Password" name="password"/>
            <input type="submit" value="Login"/>   
         </form>
     </div>
    </div>
    <script src="index.js"></script>
</body>
</html>