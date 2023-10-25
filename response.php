<html>
   <body>
     <table>
     <?php
        $conn=mysqli_connect("localhost","root","","club_members");
        $res=mysqli_query($conn,"select * from dance where Status='pending'");
        while($row=mysqli_fetch_array($res)){
     ?>
     <tr>
        <td><?php echo $row['First_Name']?></td>
        <td><?php echo $row['Last_Name']?></td>
        <td><?php echo $row['Email_Id']?></td>
        <td><?php echo $row['College_Id']?></td>
        <td><?php echo $row['Department']?></td>
        <td><?php echo $row['Section']?></td>
        <td><?php echo $row['Year_Of_Study']?></td>
        <td><?php echo $row['Age']?></td>
        <td><?php echo $row['Contact_Number']?></td>
        <td>
            <form action="response.php" method="POST">
               <input type="hidden" name="id" value="<?php echo $row['College_Id'];?>">
               <input type="submit" name="Approve" value="Approve">
               <input type="submit" name="Deny" value="Deny">
            </form>
        </td>
     </tr><br>
     <?php
        }
     ?>
     </table>
    </body>
</html>

<?php
if(isset($_POST['Approve']))
{
   $id=$_POST['id'];
   $result=mysqli_query($conn,"UPDATE dance set status='approved' where College_Id='$id'");
   echo '<script>
            alert("Student approved")
            window.location="response.php";
         </script>';
}
if(isset($_POST['Deny']))
{
   $id=$_POST['id'];
   $result=mysqli_query($conn,"DELETE from Dance where College_Id='$id'");
   echo '<script>
            alert("Student denied")
            window.location="response.php";
         </script>';
}
?>


