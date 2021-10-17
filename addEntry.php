<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header('location:login.php');
    }

?>
<?php 
    if(isset($_SESSION['email'])){
        echo("<aside><p style='position: fixed; top: 0; right: 0; color: white; font-weight:bold;'>Welcome User, you are logged in. <a href='logout.php'><button id='logout'>Log Out</button></a><p></p></aside>");
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>AddEntry Page</title>
    <meta charset="utf-8">
    <meta name="author" content="Abdullah Al Asif">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <!-- addEntry and login share the same css files -->
     <link rel="stylesheet" type="text/css" href="css/reset.css"> 
    <link rel="stylesheet" type="text/css" href="css/forms.css">
</head>
<body>
    <div id="topGap"></div>

    <div id="outerContainer">

        <!-- ============ FORM ============ -->

        <form method="POST" action="addPost.php" id="form">
           
                <!-- Top logo -->
                <div id="topLogo">
                    <img src="img/blog.png" alt="Login"> <br>
                </div>

                <legend id="topText">Add Entry to Blog</legend>

                <!-- Content after logo -->
                <div id="mainContent">

                    <div>
                        <p>
                            <label id="titleLabel">Title:</label>
                            <br>
                            <input id="titleBox" type="text" name="blogTitle" placeholder="Enter Title" class="inputBox">
                        </p>
                    </div>

                    <div>
                        <p>
                            <label id="textLabel">Text:</label>
                            <br>
                            <textarea name="blogText" class="inputBox" id="textBox" rows="4" cols="100" placeholder="Enter your text here"></textarea>

                            <button type="button" id="previewButton" >Preview</button>
                        </p>
                    </div>
                    <div>
                        <p>
                            <button type="submit" id="postButton">Post</button>
                            <button type="reset" id="clearButton">Clear</button>
                            
                        </p>
                    </div>

                    <!-- Button to go to homepage or index.html -->
                    <div>
                        <p>
                            <a href="index.php"><button type="button" id="homeButton">Back to Home</button></a>
                        </p>
                    </div>
                    <div>
                        <p>
                            <a href="viewBlog.php"><button type="button" id="goViewBlogButton">Go to Blog</button></a>
                        <p>
                    </div>


                    
                </div> 
        </form>

        <script src="addEntry.js"></script>

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
</html>