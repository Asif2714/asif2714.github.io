<?php
    session_start();
    // if logged in, putting a logout button at top right
    if(isset($_SESSION['email'])){
        echo("<aside><p style='position: fixed; top: 0; right: 0; color: white; font-weight:bold;'>Welcome User, you are logged in. <a href='logout.php'><button id='logout'>Log Out</button></a><p></p></aside>");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <meta name="author" content="Abdullah Al Asif">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <!-- addpost and login share the same css files -->
     <link rel="stylesheet" type="text/css" href="css/reset.css"> 
    <link rel="stylesheet" type="text/css" href="css/forms.css">
</head>
<body>
    <!--login page to access the blog-->
    <div id="topGap"></div>

    <div id="outerContainer">

        <!-- ============ FORM ============ -->

        <form method="POST" action="loginver.php">
           
                <!-- Top logo -->
                <div id="topLogo">
                    <img src="img/login.png" alt="Login"> <br>
                </div>

                <legend id="topText">Login Page</legend>
            
                <!-- Content after logo -->
                <div id="mainContent">
                    <div>
                        <p>
                            <label id="emailLabel">Email:</label>
                            <br>
                            <input type="email" id="email" name="email" placeholder="Enter your Email" class="inputBox loginInput" required>
                        </p>
                    </div>
                    <div>
                        <p>
                            <label id="passwordLabel">Password:</label>
                            <br>
                            <input type="password" id="password" name="password" placeholder="Enter Password" class="inputBox loginInput" required>
                        </p>
                    </div>
                    <div>
                        <p>
                            <button type="submit" id="loginButton">Login</button>
                        </p>
                    </div>

                    <!-- Button to go to homepage or index.html -->
                    <div>
                        <p>
                            <a href="index.php"><button type="button" id="homeButton">Back to Home</button></a>
                        </p>
                    </div>
                    
                </div> 
        </form>

    <!-- Link to go to addpost.html -->

    
    <!-- ============ FOOTER ============ -->

    <footer class="footerContainer">
        <p id="copyRight">
            <i>Copyright &copy; </i> 2021 <i>Abdullah Al Asif</i>
        </p>
        <section id="footerContact">
            <p>Contact</p>
            <img src="img/email.png" width="20px">
            asifabdullah47@gmail.com
        </section>
    </footer>
    
</body>

</body>
</html>