<?php 
    session_start();
    // if logged in, putting a logout button at top right
    if(isset($_SESSION['email'])){
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


    // Checking the value forwarded by the month selector and selecting 
    // the corresponding data from database with the same month
    if($_POST['month']=='January'){
        $query = "SELECT * from BLOGS WHERE MONTH(date)=1";
    }
    else if($_POST['month']=='February'){
        $query = "SELECT * from BLOGS WHERE MONTH(date)=2";
    }
    else if($_POST['month']=='March'){
        $query = "SELECT * from BLOGS WHERE MONTH(date)=3";
    }
    else if($_POST['month']=='April'){
        $query = "SELECT * from BLOGS WHERE MONTH(date)=4";
    }
    else if($_POST['month']=='May'){
        $query = "SELECT * from BLOGS WHERE MONTH(date)=5";
    }
    else if($_POST['month']=='June'){
        $query = "SELECT * from BLOGS WHERE MONTH(date)=6";
    }
    else if($_POST['month']=='July'){
        $query = "SELECT * from BLOGS WHERE MONTH(date)=7";
    }
    else if($_POST['month']=='August'){
        $query = "SELECT * from BLOGS WHERE MONTH(date)=8";
    }
    else if($_POST['month']=='September'){
        $query = "SELECT * from BLOGS WHERE MONTH(date)=9";
    }
    else if($_POST['month']=='October'){
        $query = "SELECT * from BLOGS WHERE MONTH(date)=10";
    }
    else if($_POST['month']=='November'){
        $query = "SELECT * from BLOGS WHERE MONTH(date)=11";
    }
    else if($_POST['month']=='December'){
        $query = "SELECT * from BLOGS WHERE MONTH(date)=12";
    }
    else {
        echo('Error in input has occured, please try again.');
    }

    $result = mysqli_query($conn, $query);

    $month = $_POST['month'];
?>

<?php

$rowarray = array();

while($rows = mysqli_fetch_assoc($result)){
    $rowarray[] = $rows;
}
rsort($rowarray);

?>


<html>
    <head>
        <title>Blogs in <?php echo($_POST['month'])?></title>
        <link rel="stylesheet" type="text/css" href="css/reset.css"> 
        <link rel="stylesheet" type="text/css" href="css/viewBlog.css">
    </head>
    <body>

    <!-- Top banner -->
    <div>
        <nav id="goAllBlogsNav">
            <a href="viewBlog.php" target="_self">All Blogs</a>
        </nav>
        <header id="topBanner">
            <h1>Blogs in <?php echo($_POST['month'])?></h1>
        </header>
        <nav id="topNav">
            <a href="index.php" target="_self">Home Page</a><br>
            <a href="addEntry.php" target="_self">Add Blog</a>
            
        </nav>
    </div>
    



<!-- Printing the blog of selected month from database -->
    <?php
    for($counter = 0; $counter <  count($rowarray); $counter++){
        $date = date_create($rowarray[$counter]['date']);
        $convDate =  date_format($date, "d F Y, h:i A");        
        echo("<article class='blogs'>");
        echo("<section class='blogDates'>🕑".$convDate." UTC</section>");
        echo("<header class='blogTitles'>".$rowarray[$counter]['title']."</header>");
        echo("<section class='blogText'>".$rowarray[$counter]['text']."</section>");
        echo("<hr>");
        echo("</article>");
   
    }
    
    ?>
    </body>

</html>






