<?php
session_start();
if(isset($_SESSION['student']))
{
    $conn=mysqli_connect("localhost","root","","club_members");
    $row=mysqli_query($conn,"select * from dance where Email_Id='$_SESSION[student]'");
    $result=mysqli_fetch_array($row);
?>
<html>
    <body>
        <h1>Welcome, <?php echo $result['First_Name']; ?></h1>
        <table>
        <tr><td><?php echo $result['First_Name']?></td></tr>
        <tr><td><?php echo $result['Last_Name']?></td></tr>
        <tr><td><?php echo  $result['Email_Id']?></td></tr>
        <tr><td><?php echo  $result['College_Id']?></td></tr>
        <tr><td><?php echo  $result['Department']?></td></tr>
        <tr><td><?php echo  $result['Section']?></td></tr>
        <tr><td><?php echo  $result['Year_Of_Study']?></td></tr>
        <tr><td><?php echo  $result['Age']?></td></tr>
        <tr><td><?php echo  $result['Contact_Number']?></td></tr>
        </table>
    </body>
</html>
 <?php
}
 ?>