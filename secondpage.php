<!-- TOTAL 8 UNIQUE SEMANTIC ELEMENTS USED. aside is used in homepage and section is used in here. Others are the same -->
<!-- 7 semantic elements used in this page including header, nav, section, figure, figcaption, article, footer-->
<?php
    session_start();
    // starting session to access session variables
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Asif's Portfolio: 2nd Page</title>
    <meta charset="utf-8">
    <meta name="author" content="Abdullah Al Asif">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <!-- homepage and secondpage share the same css files -->
     <link rel="stylesheet" type="text/css" href="css/reset.css"> 
    <link rel="stylesheet" type="text/css" href="css/mainpages.css">
</head>
<body>
    <?php 
        if(isset($_SESSION['email'])){
            // if logged in, putting a logout button at top right
            echo("<aside><p style='position: fixed; top: 0; right: 0; color: white; font-weight:bold; background-color: gray;'>Welcome User, you are logged in. <a href='logout.php'><button id='logout'>Log Out</button></a><p></p></aside>");       
        }
    ?>

    <!-- ============ NAVBAR ============ -->
    
    <header>    <!--Use of header-->
        <nav>   <!--Use of nav-->
            <ul class="navList">
                <li class="navItem"><img src="img/A14_Logo.png"></li>
                <li class="navItem"><a href="index.php" target="_self">Abdullah Al Asif</a></li>
                <li class="navItem"><a href="#skills">Skills</a></li>
                <li class="navItem"><a href="#experience">Experience</a></li>
                <li class="navItem"><a href="#otherWorks">Other Works</a></li>
                <li class="navItem">|</li>
                <li class="navItem"><a href="#links">Links</a></li>
                <li class="navItem">|</li>
                <li class="navItem"><a href="index.php">Home Page</a></li>
                <li class="navItem"><a href="viewBlog.php">Blog</a></li>
                <li class="navItem">|</li>
                <li class="navItem"><a href="login.php">Log In</a></li>
            </ul>
        </nav>
    </header>

    <!-- ============ TOP BANNER ============ -->

    <article id="topBanner">Skills & Experience</article>   <!--Use of article-->

    <!-- ============ SKILLS ============ -->

    <article id="skills">   
        <h1>Skills</h1>
        <hr>
        <h2>Soft Skills</h2>
        <figure>    <!--Use of figure-->
            <img src="img/softSkills.jpg">  
        </figure>

        <hr>
        <h2>Tech Skills</h2>
        <figure>
            <img src="img/techSkills.jpg">
        </figure>
        <hr>

    </article>

    <!-- ============ EXPERIENCE ============ -->

    <article id="experience">
        
        
        <h1>Experience</h1>
        <section>   <!--Use of section-->
            <h2><img src="img/qmul.png" height="20px"> 2021: Participated in QTaster Spring event</h2>
            <p>I had a great opportunity to participate in the QTaster spring event which was held on a weekly basis from February to April of 2021. We had to know about
                different organizations and companies such as Microsoft, FDM, Colorintech, Barclays, Civil Service, BT & Openreach, the work culture, followed by discussion 
                sessions with the panelists about their experiences in these workplaces.
            </p>
        </section>

        <section>
            <h2><img src="img/qmul.png" height="20px"> 2020-2021: Experience gained from 1st Semester at QMUL</h2>
            <p>In the 1st semester of the first year of my Computer Science course at QMUL, I had to work on different programming 
                projects as well as learn the architecture of computers and how they work. I also had a great experience in learning the 
                fundamentals of logics and algorithms. Besides, I had to work collaboratively within groups to research about technologies and 
                learnt how to approach a task related to researching and how to accumulate all the information the team acquired into a well-structured
                document for submission or formal presentation.
            </p>
        </section>

        <section>
            <h2><img src="img/mcc.png" height="20px" width="18px"> 2018-2019: Appointed as a senior House Cultural Prefect in a pre-military High School</h2>
            <p>Had the priviledge to lead a group of 97 individuals throughout the year as a House Cultural Prefect of Fazlul Haque House at Mirzapur Cadet College. Achieved leadership experience as well as the knowledge of organizing cultural events. Had to undertake responsibilities of leading the fellow peers including juniors of the house. 
                Have learnt the importance of being responsible and being flexible in different situations and deal with a diverse range of people and have an impact upon them.</p>
        </section>

        <section>
            <h2><img src="img/duke.png" height="20px"> 2018: Participated in Duke of Edinburgh International award program an achieved the Bronze award.</h2>
            <p>Through participating in this programme, I've acheived experience of learing to explore new things and developing myself.
                I’ve learnt that there are a lot of skills, opportunities and adventures that I can take part of and discover more about myself, what I am and what I truly want to be.
            </p>
        </section>

        <section>
            <h2><img src="img/mcc.png" height="20px" width="18px"> 2015-2018: Participated in several competitions including Spelling Bee, Football, Basketball and Athletics.</h2>
            <p>Throughout the years I've studied in Mirzapur Cadet College, I participated in the competitions and achieved valuable experiece. Learnt how to coordinate with teammates in different situations and work together as a team and cross my physical limits.
                In the beginning, I thought that I won’t be physically competent enough to participate in sports events. But when I tried, I gradually knew about my abilities 
                and worked harder to do more challenging stuff such as doing 100m 200m sprints, relays and many other things, which ultimately boosted my self-confidence.
            </p>
            <hr>
        </section>
    </article>

    <!-- ============ OTHER WORKS ============ -->

    <article id="otherWorks">
        <h1>Other Works</h1>
        <section>           
            <h2>Designing Logos using Adobe Creative Suite</h2>
            <p>I have designed numerous logos for various voluntary groups, pages, and a logo for myself. I have used the Adobe After Effects, as that is what I am used to the most and also know some of its functionalities.</p>
            <figure>
                <img src="img/logos.jpg">
                <figcaption>Some of the logos</figcaption>  <!--Use of figcaption-->
            </figure>
            <br>
        </section>
        <section>
            <h2>Creating Videos</h2>
            <p>I have produced a few number of videos collaboratively and personally, and have published them in the video sharing platform YouTube. You can have a visit to the channel by clicking <a href="https://www.youtube.com/channel/UCDI_zt5NO-kRfEjud3GLDhg">here</a>.</p>
            <br>
        </section>
        <section>
            <h2>Photography</h2>
            <p>I have some unpublished photographs which is taken using various digital cameras, and I have a plan to learn to take photos which look professional and share them in the internet. A short gallery including some of the photographs will be uploaded here soon.</p>
            <br>
            <figure>
                <img src="img/photos.jpg">
                <figcaption>Some of the photographs</figcaption>
            </figure>
            <hr>
            <br>
        </section>
    </article>
    <br>

    <!-- ============ LINKS ============ -->

    <article id="links">
        <ol>
            <li><a href="https://github.com/Asif2714" target="_blank"><img src="img/github.png" width="30px"></a></li>
            <li><a href="https://www.reddit.com/user/A14Inc" target="_blank"><img src="img/reddit.png" width="30px"></a></li>
            <li><a href="https://www.linkedin.com/in/asif14/" target="_blank"><img src="img/linkedin.png" width="30px"></a></li>
            <li><a href="https://www.facebook.com/abdullahal.asif.79/" target="_blank"><img src="img/facebook.png" width="30px"></a></li>
            <li><a href="https://steamcommunity.com/id/a14inc/" target="_blank"><img src="img/steam.png" width="30px"></a></li>
        </ol>
    </article>

    <!-- ============ GO TO HOMEPAGE ============ -->

    <article id="gotoOther">
        <h2><a href="index.php">Go to the home page</a></h2>
    </article>

    <!-- ============ FOOTER ============ -->

    <footer class="footerContainer">    <!--Use of footer-->
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
