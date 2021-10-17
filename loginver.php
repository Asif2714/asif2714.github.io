<!-- PHP for validation of Credentials against database -->
<?php
    session_start();


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

    
    if(isset($_POST['email'])){

        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM LOGIN where email='".$email."' AND password='".$password."' limit 1";

        $result = mysqli_query($conn,$sql);

        // if query successful, session starts, session variable email is set to email, 
        //and posted to false which is requierd for preventing posting repeatedly
        if(mysqli_num_rows($result)==1){
            $_SESSION['email'] = $email;
            $_SESSION['posted'] = false;

            // redirecting to addEntry.php
            header('location:addEntry.php');
            exit();
        }
        //dealing with incorrect credentials.
        else{
            echo " You have entered incorrect credentials";
            echo " Click <a href='login.php' target='_self'>Here</a> to go back.";
            exit();
        }
    }
?>
<!-- end of loginVer.php -->