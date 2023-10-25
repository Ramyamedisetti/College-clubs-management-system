<html>
   <body>
     <table>
     <?php
        $conn=mysqli_connect("localhost","root","","club_members");
        $res=mysqli_query($conn,"select * from dance where Status='Approved'");
        while($row=mysqli_fetch_array($res)){
     ?>
     <tr>
        <td><?php echo $row['College_Id']?></td>
        <td><?php echo $row['First_Name']?></td>
        <td><?php echo $row['Last_Name']?></td>
        <td><?php echo $row['Email_Id']?></td>
        <td><?php echo $row['Contact_Number']?></td>
        <td>
            <form action="display.php" method="POST">
               <input type="hidden" name="id" value="<?php echo $row['College_Id'];?>">
               <input type="submit" name="Remove" value="Remove">
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
if(isset($_POST['Remove']))
{
   $id=$_POST['id'];
   $result=mysqli_query($conn,"DELETE from Dance where College_Id='$id'");
   echo '<script>
            alert("Student removed")
            window.location="display.php";
         </script>';
}
?>


