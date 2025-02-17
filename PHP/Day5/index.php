<html>
    <?php 
        session_start();
        echo " <div style='text-align:center'><span>Hi, <b>".$_SESSION['name']."</b> .Welcom to our site.</span></div>";
    ?>

    <div style="margin-bottom: 35px" width="230" height="70">
        <img src="../Day5/img1.jpg">
    </div>

    <div style="text-align:center">
        <button style="background-color:red" onclick="<?php session_destroy(); ?>"><a href="signup.php" style="text-decoration:none;color:white">Sign Out of Your Account</a></button>
    </div>
    
</html>