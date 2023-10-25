<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration Form</title>
  <!-- Font styles-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- CSS -->
  <link rel="stylesheet" href="register.css">
</head>
<body>
  <header>
    <div class="header-left">
        <div class="logo">
            <a class="logo" href="index.html"><h2>Clubs & Activities</h2></a>
        </div>
        <nav>
            <ul>
                <li>
                    <a class="link" href="index.html">Home</a>
                </li>
                <li>
                    <a class="link" href="">Clubs</a>
                </li>
                <li>
                    <a class="link" href="">Volunteer Us</a>
                </li>
                <li>
                    <a class="link" href="https://www.mvgrce.com/about/about">About</a>
                </li>
                <li>
                    <a class="link" href="#"> >>Back</a>
                </li>
            </ul>
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
    <h1>Registration Form</h1>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-body">
            <form method="post">
              <div class="form-group">
                <label for="first-name" >First Name</label>
                <input type="text" class="form-control" id="first-name" name="FirstName" required>
              </div>
              <div class="form-group">
                <label for="last-name">Last Name</label>
                <input type="text" class="form-control" id="last-name" name="LastName" required>
              </div>
              <div class="form-group">
                <label for="email">Email ID</label>
                <input type="email" class="form-control" id="email" name="Email" required>
              </div>
              <div class="form-group">
                <label for="college-id">College ID</label>
                <input type="text" class="form-control" id="college-id" name="CollegeId" required>
              </div>
              <div class="form-group">
                <label for="department">Department</label>
                <select class="form-control" id="department" name="Department" required>
                  <option>select department</option>
                  <option value="CSE">CSE</option>
                  <option value="ECE">ECE</option>
                  <option value="IT">IT</option>
                  <option value="MECH">MECH</option>
                  <option value="EEE">EEE</option>
                  <option value="CHEM">CHEM</option>
                  <option value="CIVIL">CIVIL</option>
                </select>
              </div>
              <div class="form-group">
                <label for="section">Section</label>
                <select class="form-control" id="section" name="Section" required>
                  <option>choose a section</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="c">C</option>
                </select>
              </div>
              <div class="form-group">
                <label for="year-of-study">Year of Study</label>
                <select class="form-control" id="year-of-study"  name="YearOfStudy" required>
                <option value="">Select Year</option>
                <option value="1st-year">1st Year</option>
                <option value="2nd-year">2nd Year</option>
                <option value="3rd-year">3rd Year</option>
                <option value="4th-year">4th Year</option>
                </select>
              </div> 
              <div class="form-group">
                <label for="age">Age</label>
                <input type="number" class="form-control" id="age"  name="Age" required>
              </div>
              <div class="form-group">
                <label for="contact-number">Contact Number</label>
                <input type="text" class="form-control" id="contact-number" name="ContactNumber" required>
              </div>


                <button type="submit" name="Register" class="btn btn-primary">Submit</button>
                </form>
                </div>
                </div>
                </div>
                </div>
                
                  </div>
                  <!-- jQuery -->
                  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
                  <!-- Bootstrap JS -->
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
                  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
                </body>
                </html>
<?php
include 'request.php';
?>