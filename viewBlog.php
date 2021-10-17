<?php
    session_start();

    if($_SESSION['posted']){
        // use of posted session variable to alert user about successful posting of blog
        echo("<script>window.alert('Your blog post has been successfully added')</script>");
        $_SESSION['posted'] = false;
    }
?>

<?php 
    if(isset($_SESSION['email'])){
        // if logged in, putting a logout button at top right
        echo("<aside><p style='position: fixed; top: 0; right: 0; color: white; font-weight:bold;'>Welcome User, you are logged in. <a href='logout.php'><button id='logout'>Log Out</button></a><p></p></aside>");
    }

?>

<?php
    $dbhost = getenv("MYSQL_SERVICE_HOST");
    $dbport = getenv("MYSQL_SERVICE_PORT");
    $dbuser = getenv("DATABASE_USER");
    $dbpwd = getenv("DATABASE_PASSWORD");
    $dbname = getenv("DATABASE_NAME");
    // Creates connection
    $conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
    // Checks connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT * from BLOGS";
    $result = mysqli_query($conn, $query);

?>

<html>

    <head>
        <title>All Blogs</title>
        <link rel="stylesheet" type="text/css" href="css/reset.css"> 
        <link rel="stylesheet" type="text/css" href="css/viewBlog.css">
    </head>
    <body>

        <!-- banners at top -->
        <div>
        <article id="monthForm">
            <!-- form for viewing blog entries by month -->
            <form action="viewBlogMonth.php" method="POST">
                <label>Filter by Month:</label>
                    <select name="month">
                            <option selected>January</option>
                            <option>February</option>
                            <option>March</option>
                            <option>April</option>
                            <option>May</option>
                            <option>June</option>
                            <option>July</option>
                            <option>August</option>
                            <option>September</option>
                            <option>October</option>
                            <option>November</option>
                            <option>December</option>
                    </select>
                    <input type="submit" value="FILTER" id="filterbutton">
            </form>
        </article>
        <header id="topBanner">
            <h1>My Blog</h1>
        </header>
        <nav id="topNav">
            <a href="index.php" target="_self">Home Page</a><br>
            <a href="addEntry.php" target="_self">Add Blog</a>
        </nav>
        </div>

        <?php

        $rowarray = array();    

        while($rows = mysqli_fetch_assoc($result)){ //The database entries are entered into a new array
            $rowarray[] = $rows; 
        }
        rsort($rowarray); //The array is reversed using rsort

        for($counter = 0; $counter <  count($rowarray); $counter++){
            $date = date_create($rowarray[$counter]['date']);
            $convDate =  date_format($date, "d F Y, h:i A");
            echo("<article class='blogs'>");
            echo("<section class='blogDates'>🕑".$convDate." UTC</section>");
            echo("<header class='blogTitles'>".$rowarray[$counter]['title']."</header>");
            echo("<section class='blogText'>".$rowarray[$counter]['text']."</section>");
            echo("<hr>");
            echo("</article>");

            //         $date=date_create("2013-03-15 13:43:32");
// echo date_format($date,"Y/m/d H:i:s");
            
        }

        ?>


    </body>
</html>