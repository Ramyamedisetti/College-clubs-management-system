<?php
session_start();
if(isset($_SESSION['admin']))
{
include 'dbconn.php';
$row=mysqli_query($conn,"select * from admin where username='$_SESSION[admin]'");
$result=mysqli_fetch_array($row);
?>
<html>
    <body>
       <h1>Welcome, <?php echo $result['Name']; ?></h1>
        <table>
        <tr><td><?php echo $result['Name']?></td></tr>
        <tr><td><?php echo  $result['username']?></td></tr>
        <tr><td><?php echo  $result['College_Id']?></td></tr>
        <tr><td><?php echo  $result['Department']?></td></tr>
        </table>
    </body>
    
</html>
 <?php
}
 ?>  