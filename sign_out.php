<?php 
    session_start();
    session_destroy();
    echo"Log out successfully!";
    header('Location: ./index.php' );
?>