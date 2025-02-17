<html>
    <body>

        <h2>Sign Up</h2>
        please fill this form to create an account.<br><br>
        <form action="<?php $_PHP_SELF ?>" method ="POST">
            Username <br>
            <input type="text" name="name"><br><br>
            Password <br>
            <input type="password" name="pass"><br><br>
            Confirm Password <br>
            <input type="password" name="pass"><br><br>
            <a href="login.php">
            <input type="submit"> </a><input type="reset"><br><br>
            
        </form>
        
        Already have an account? <a href="login.php">Login here.</a>
    </body>

</html>
<?php 
    session_start();
    if(isset($_REQUEST["name"])){
        $name=$_REQUEST['name'];
        $_SESSION["name"]=$name;
    }
        
    if(isset($_REQUEST["pass"])){
        $pass=$_REQUEST['pass'];
        $_SESSION["pass"]=$pass;
    }

    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";
?>