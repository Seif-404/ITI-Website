<!DOCTYPE HTML>  
<html>
<body> 
<h2>User Registration Form</h2>
<p>Please fill this form and submit to add user record to the database</p>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
Name: <br> <input type="text" name="name">
<br><br>
E-mail: <br> <input type="text" name="email">
<br><br>
Gender: <br>
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<br><br>
<input type="checkbox" name = "check" >Recieve E-Mails from us. 
<br><br>
<input type="submit" name="submit" value="Submit" style="background-color: blue"> 
<input type="reset" name="cancel" value="Cancel">
</form>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'demo';
$link = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name =$_POST['name'];
    $email =$_POST['email'];
    $gender =$_POST['gender'];
    $mail =$_POST['check'];
    /*$sql = "INSERT INTO user(name,email,gender,mail_status)
            VALUES ('$name','$email','$gender','$mail')";*/

if (!empty($_POST["check"])) {
    $sql = "INSERT INTO user(name,email,gender,mail_status)
            VALUES ('$name','$email','$gender','$mail')";
}else{
    $sql = "INSERT INTO user(name,email,gender,mail_status)
            VALUES ('$name','$email','$gender','of')";
}

$retval = mysqli_query($link,$sql);
if(!$retval){
    die('could not connect: '.mysqli_error($link));
}

if(!$link){
    die('could not connect: '.mysqli_error($link));
}

}


mysqli_close($link);
?>
</body>
</html>