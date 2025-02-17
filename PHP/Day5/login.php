<html>
    <body>
       
        <h2>Login</h2>
        please fill in your credentials to login.<br><br>
        <form action="index.php" method="POST">

            Username <br>
            <input type="text" name="name"><br><br>
            Password <br>
            <input type="password" name="pass"><br><br>
            <input type="submit" value="Login"><br><br>

        </form>
    
        Don't have an account? <a href="signup.php">Sign up now.</a>

    </body>
    
    
</html>
<?php 

    session_start();
    
    if(isset($_REQUEST["name"]) && ($_SESSION['name']==$_REQUEST["name"]) 
    && isset($_REQUEST["pass"]) && ($_SESSION['pass']==$_REQUEST["pass"])){
        

    }
            
?>