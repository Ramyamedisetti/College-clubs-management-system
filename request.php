<?php
$conn=mysqli_connect("localhost","root","","club_members");

if(isset($_POST['Register']))
{
   $FirstName=$_POST['FirstName'];
   $LastName=$_POST['LastName'];
   $EmailId=$_POST['Email'];
   $CollegeId=$_POST['CollegeId'];
   $Department=$_POST['Department'];
   $Section=$_POST['Section'];
   $YearOfStudy=$_POST['YearOfStudy'];
   $Age=$_POST['Age'];
   $ContactNumber=$_POST['ContactNumber'];

   $result=mysqli_query($conn,"select * from dance where College_Id='$CollegeId'");
   if(mysqli_num_rows($result)>0)
   {
    echo ' <script>
            alert("The given college id is already taken");
             window.location="register.php";
             </script>';
   }
   else
   {
      $query="insert into dance() values('$FirstName',' $LastName','$EmailId','$CollegeId','$Department','$Section','$YearOfStudy','$Age','$ContactNumber','pending')";
      mysqli_query($conn,$query);
      echo ' <script>
            alert("Your request to register as a club member is submitted.You will be notified once you are approved.");
            window.location="register.php";
             </script>';

   }
}
?>