<!DOCTYPE HTML>  
<html>
<body> 
<h2>User Details</h2>
<a href="./register.php">
<input type="submit" name="submit" value="Add New User" style="background-color: lightgreen"><br></br>
</a>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname ='demo';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if(! $conn ) {
   die('Could not connect: ' . mysqli_error($conn));
}

$sql = 'SELECT user_id,name, email, gender ,mail_status FROM user';
mysqli_select_db($conn,$dbname);
$result = mysqli_query($conn,$sql );

if(! $result ) {
   die('Could not get data: ' . mysqli_error($conn));
}
?>

<table border ="1" cellspacing="0" cellpadding="10">
  <tr>
    <th>User id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Gender </th>
    <th>Mail status</th>
  </tr>
<?php
if (mysqli_num_rows($result) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($result)) {
 ?>
 <tr>
   <td><?php echo $data['user_id']; ?> </td>
   <td><?php echo $data['name']; ?> </td>
   <td><?php echo $data['email']; ?> </td>
   <td><?php echo $data['gender']; ?> </td>
   <td><?php echo $data['mail_status']; ?> </td>
   
 <tr>
 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>
 <?php }
 mysqli_close($conn); ?>
 </table>
 </body>
</html>
