<!-- TOTAL 8 UNIQUE SEMANTIC ELEMENTS USED. aside is used here and section is used in second page. Others are the same -->
<!-- 7 semantic elements used in this page including header, nav, aside, figure, figcaption, article, footer-->
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Asif's Portfolio: Home Page</title>
    <meta charset="utf-8">
    <meta name="author" content="Abdullah Al Asif">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <!-- homepage and secondpage share the same css files -->
    <link rel="stylesheet" type="text/css" href="css/reset.css"> 
    <link rel="stylesheet" type="text/css" href="css/mainpages.css">
</head>
<body>
    <?php 
        // if logged in, putting a logout button at top right
        if(isset($_SESSION['email'])){
            echo("<aside><p style='position: fixed; top: 0; right: 0; color: white; font-weight:bold; background-color: gray;'>Welcome User, you are logged in. <a href='logout.php'><button id='logout'>Log Out</button></a><p></p></aside>");    
        }
    ?>

    <!-- ============ NAVBAR ============ -->

    <header>    <!--Use of header-->
        <nav>   <!--Use of nav-->   
            <ul class="navList">
                <li class="navItem"><img src="img/A14_Logo.png"></li>
                <li class="navItem"><a href="index.php" target="_self">Abdullah Al Asif</a></li>
                <li class="navItem"><a href="#aboutMe">About Me</a></li>
                <li class="navItem"><a href="#education">Education</a></li>
                <li class="navItem"><a href="#projects">Projects</a></li>
                <li class="navItem">|</li>
                <li class="navItem"><a href="#links">Links</a></li>
                <li class="navItem">|</li>
                <li class="navItem"><a href="secondpage.php">Skills and Experience</a></li>
                <li class="navItem"><a href="viewBlog.php">Blog</a></li>
                <li class="navItem">|</li>
                <li class="navItem"><a href="login.php">Log In</a></li>
            </ul>
        </nav>
    </header>

    <!-- ============ TOP BANNER ============ -->

    <article id="topBanner">Home Page</article>  <!--Use of article-->

    <!-- ============ FRONT WALLPAPER ============ -->

    <article id="frontWallpaper">
        <figure><img src="img/wallpaper.jpg"></figure>  <!--Use of figure-->
    </article>

    <!-- ============ LINKS ============ -->
    
    <article id="links">   
        <header>Links</header>
        <ol>
            <li><a href="https://github.com/Asif2714" target="_blank"><img src="img/github.png" width="30px"></a></li>
            <li><a href="https://www.reddit.com/user/A14Inc" target="_blank"><img src="img/reddit.png" width="30px"></a></li>
            <li><a href="https://www.linkedin.com/in/asif14/" target="_blank"><img src="img/linkedin.png" width="30px"></a></li>
            <li><a href="https://www.facebook.com/abdullahal.asif.79/" target="_blank"><img src="img/facebook.png" width="30px"></a></li>
            <li><a href="https://steamcommunity.com/id/a14inc/" target="_blank"><img src="img/steam.png" width="30px"></a></li>
        </ol>
    </article>

    <!-- ============ ABOUT ME ============ -->

    <article id="aboutMe">
        <aside> <!--Use of aside-->
            <figure>
                <img src="img/Asif's Photo.JPG" width="200px">
                <figcaption>Abdullah Al Asif</figcaption>   <!--Use of figcaption-->
            </figure>
        </aside>
        
        <h1>About Me</h1>
        <p>I am a first year Computer Science student who aspires to become a skilled individual in AI, Computer Architecture and Game development. </p>
        <p>I am also an avid runner and always strive to achieve personal development goals. Besides, I am deeply into videogames and technology, which is why I chose this career path. I believe in team spirit and want to engage and cooperate with my peers to do and achieve something great in the near future.</p>
    </article>

    <!-- ============ EDUCATION ============ -->

    <article id="education">
       <h1>Education</h1> 
       <hr>
       <p><b>2020-2024:</b> BSc in Computer Science - Queen Mary University of London - United Kingdom</p>
       <hr>
       <p><b>2020-2020:</b> Undergraduate Foundation Programme - OnCampus London - United Kingdom</p>
       <hr>
       <p><b>2013-2019:</b> Secondary and Higher Secondary Studies - Mirzapur Cadet College - Bangladesh</p>
       <hr>
    </article>

    <!-- ============ PROJECTS ============ -->
    
    <article id="projects">
        <h1>Projects</h1>
        <p>
            <b>Adventure Game in Java</b><br>
            <aside> 
                <figure>
                    <a href="img/textGame.png"><img src="img/textGame.png" width="200px"></a>
                    <figcaption>Start of game</figcaption>   <!--Use of figcaption-->
                </figure>
            </aside>
            
            
            <p>
                Created an adventure game in java which implemets the OOP concepts of the java programming language
                such as class hiearchy, polymorphism, dynamic binding. It is an text based game which is under development 
                to implemet GUI. It is based on a hero which has to pass a dangerous dungeon full of monsters of random difficulty
                and rewards, which is a game of decisions, as only the best can pass through the dungeon alive and achieve a high score.
            </p>
        </p>
        <br>
    </article>

    <!-- ============ GO TO NEXT PAGE ============ -->

    <article id="gotoOther">
        <h2><a href="secondpage.php">Go to the next page</a></h2>
    </article>

    <!-- ============ FOOTER ============ -->

    <footer class="footerContainer"> <!--Use of footer-->
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
