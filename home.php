<?php
session_start();
if(isset($_SESSION['admin']))
{
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Clubs & Activities</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="homestyles.css">
        <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- Font styles-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&display=swap" rel="stylesheet">
    <!--<style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&display=swap');
      </style> -->
    </head>
    <body>
        <header>
            <div class="header-left">
                <div class="logo">
                    <h2>Clubs & Activities</h2>
                </div>
                <nav>
                    <ul>
                        <li>
                            <a href="index.html" class="active">Home</a>
                        </li>
                        <li>
                            <a href="">Clubs</a>
                        </li>
                        <li>
                            <a href="">Volunteer Us</a>
                        </li>
                        <li>
                            <a href="https://www.mvgrce.com/about/about">About</a>
                        </li>
                    </ul>
                    <div class="login">
                        <a href="admin_signin.html">Login</a>
                    </div>
                </nav>
            </div>
            <div class="header-right">
                <div class="login">
                    <a href="admin_signin.html">Login</a>
                </div> 
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

        <div class="container">
            <h1 class="heading">Together. Forever.</h1>
            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <footer>
            <center>
           <a href="#" class="twitter">Twitter</a> 
           <a href="#" class="facebook">Facebook</a>
           <a href="#" class="instagram">Instagram</a>
            </center><br><br><br>
           <p class="copyright">© copyrights reserved 2023</p>
        <footer>
    </body>
</html>
<?php
}
else
{
    echo'
    <script>
        alert("You are not logged in.Please login.");
        window.location="login.php";
    </script>';
}
?>