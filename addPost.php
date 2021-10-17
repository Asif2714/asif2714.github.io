<!-- PHP to add data to database after posting is successful -->
<?php
    session_start();
    

    $_SESSION['posted'] = false;

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

    if(isset($_POST['blogTitle'])){
        $title = $_POST['blogTitle'];
        $text = $_POST['blogText'];
        $date =  date('Y-m-d H-i-s');
        // adds data to database
        $sql = "INSERT INTO BLOGS(title, date, text) VALUES ('$title', '$date', '$text')";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['posted'] = true;
            // redirecting after successful insertion
            header('location:viewBlog.php');
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        }

?>