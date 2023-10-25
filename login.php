<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="styles.css">
    <!-- Font styles-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&display=swap" rel="stylesheet">
<!-- Main Body-->
  </head>
  <body>
    <!-- NavBar -->
    <header>
      <div class="header-left">
          <div class="logo">
              <h2>Clubs & Activities</h2>
          </div>
          <nav>
              <ul type="none">
                  <li>
                      <a href="index.html" >Home</a>
                  </li>
                  <li>
                      <a href="#">Clubs</a>
                  </li>
                  <li>
                      <a href="#">Volunteer Us</a>
                  </li>
                  <li>
                      <a href="https://www.mvgrce.com/about/about">About</a>
                  </li>
              </ul>
             <!-- <div class="login">
                  <a class="active" href="">Login</a>
              </div>-->
          </nav>
      </div>
      <div class="header-right">
          <!--<div class="login">
              <a class="active" href="admin_signin.html">Login</a>
          </div>--> 
          <div class="hamburger">
              <div></div>
              <div></div>
              <div></div>
          </div>
      </div>
  </header>
  <script>
      hamburger = document.querySelector(".hamburger");
      nav = document.querySelector("nav");
      hamburger.onclick = function() {
          nav.classList.toggle("active");
      }
  </script>








    <!-- <img src="mvgr.png" width="100%" height="30%"> -->
      
        <div class="login">

        <h1>Sign In</h1><br>
        <div class="studentadmin" id="button-container">
          <input class="btn" type="button" name="login" id="Admin" value="Admin" checked  onclick = "window.location.href='#';">
          <input class="btn" type="button" name="login" id="Student" value="Student"  onclick = "window.location.href='#';">
  
        </div><br>
        <div id="form-container">
      <!--admin form-->

 <form class="myform" id="admin-form" method="post">
             <div class="formdiv">
               <label for="username1">Username:</label>
               <input class="box" type="text" id="username1" name="username1" placeholder="username" required autofocus>
             </div><br>

             <div class="formdiv">
               <label for="password1">Password:  </label>
               <input class="box" type="password" id="password1" name="password1" placeholder="password" required>
             </div><br>
        
             <div class="formdiv">
               <input class="box" type="checkbox" id="checkbox">
               <label for="checkbox">Remember me</label>
             </div><br>
             <input onclick = "window.location.href='#';" class="submit" type="submit" name="login1" value="Sign In">
             <p><a class="forgot" href="#">Forgot password?</a></p>
           </form>
      <!--student form-->

           <form class="myform" id="student-form" method="post">
             <div class="formdiv">
               <label for="username2">Username:</label>
                <input class="box" type="text" id="username2" name="username2" placeholder="username" required autofocus>
             </div><br>

             <div class="formdiv">
               <label for="password2">Password:  </label>
               <input class="box" type="password" id="password2" name="password2" placeholder="password" required>
             </div><br>
        
             <div class="formdiv">
               <input class="box" type="checkbox" id="checkbox">
               <label for="checkbox">Remember me</label>
             </div><br>
             <input onclick = "window.location.href='home.html';" class="submit" type="submit" name="login2" value="Sign In">
             <p><a class="forgot" href="#">Forgot password?</a></p>
           </form>
        </div>
    </div>
    <div class="footer">
      <center>
     <a href="#" class="twitter">Twitter</a> 
     <a href="#" class="facebook">Facebook</a>
     <a href="#" class="instagram">Instagram</a>
      </center>
     <p class="copyright">© copyrights reserved 2023</p>
  </div>
  <script>
    const adminButton = document.getElementById('Admin');
    const studentButton = document.getElementById('Student');
    const adminForm = document.getElementById('admin-form');
    const studentForm = document.getElementById('student-form');
    const formContainer = document.getElementById('form-container');

    adminButton.addEventListener('click', () => {
    formContainer.style.display = 'block';
    adminForm.style.display = 'block';
    studentForm.style.display = 'none';
    adminButton.classList.add('highlighted');
    studentButton.classList.remove('highlighted');
    });

    studentButton.addEventListener('click', () => {
    formContainer.style.display = 'block';
    adminForm.style.display = 'none';
    studentForm.style.display = 'block';
    adminButton.classList.remove('highlighted');
    studentButton.classList.add('highlighted');
    });

  </script>

  </body>
</html>
<?php
    include 'dbconn.php';
    if(isset($_POST['login1']))
    {
       $username=$_POST['username1'];
       $password=$_POST['password1'];
       $query=mysqli_query($conn,"SELECT * FROM `admin` WHERE username='$username' and password='$password'");
       $row=mysqli_num_rows($query);
       if($row==1)
       {  
          $_SESSION['admin']=$username;
          echo ' <script>
            alert("login successful");
             window.location="admin.html";
             </script>';
        
       }
       else
       {
          echo '
          <script>
            alert("Either username or password is incorrect");
            windows.location="login.html";
          </script>
          ';
        }
      }
     if(isset($_POST['login2']))
    {
       $username=$_POST['username2'];
       $password=$_POST['password2'];
       $query=mysqli_query($conn,"SELECT * FROM `student` WHERE username='$username' and password='$password'");
       $row=mysqli_num_rows($query);
       if($row==1)
       {
        $_SESSION['student']= $username;
        echo ' <script>
          alert("login successful");
           window.location="admin.html";
           </script>'; 
        }
       else
       {
         echo '
         <script>
           alert("Either username or password is incorrect");
           windows.location="login.php";
         </script>
         ';
        }
     }   
?>