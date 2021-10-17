<!-- PHP to destroy session when logot button is clicked, redirecting to login page -->
<?php
    session_start();
    session_destroy();
    header('location:login.php');

?>