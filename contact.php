<?php
require_once "config.php";
$username = $rollno = $MobileNo = $email = $events ="";
$username_err = $rollno_err = $MobileNo_err = $email_err = $event_err ="";
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(empty(trim($_POST['username']))){
        $username_err ="username cannot be blank";  
    }
    else{
        $sql ="SELECT id FROM contact WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = trim($_POST['username']);
            //try to excute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt)== 1){
                    $username_err ="This username is already taken";
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "something went wrong";
            }
        }
mysqli_stmt_close($stmt);

// check for password
if(empty(trim($_POST['mobileNo']))){
    $mobileNo_err ="Number cannot be blank";  
}
elseif(strlen(trim($_POST['mobleNo'])) <10 ){
    $mobileNo_err ="mobile no cannot be less than 10 numbers";  
}
else{
    $MobileNo = trim($_POST['mobileNo']);
}
/*check for confirmed password
if((trim($_POST['password']) != trim($_POST['confirm_password'])){
    $password_err = "passwords should match";  
}*/
if(empty(trim($_POST['rollno']))){
    $rollno_err ="rollno cannot be blank";  
}
else{
    $rollno = trim($_POST['rollno']);
}
if(empty(trim($_POST['email']))){
    $email_err ="email cannot be blank";  
}

else{
    $email = trim($_POST['email']);
}
if(empty(trim($_POST['event']))){
    $event_err ="choose a event";  
}

else{
    $event = trim($_POST['event']);
}
if(empty($username_err) && empty($rollno_err) && empty($mobile_No_err) && empty($email_err) && empty($event_err)){
    $sql = " INSERT INTO contact (username, rollno, mobileNo , email, events) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
       mysqli_stmt_bind_param($stmt,"sssss", $param_username, $param_rollno, $param_mobileNo, $param_email, $param_events);
    //set these parameters
    $param_username = $username;
    $param_rollno = $rollno;
    $param_mobileNo = $MobileNo;
    $param_email = $email;
    $param_events = $events;
    //try to execute the query
    if(mysqli_stmt_execute($stmt)){
        header("location: about.html");
    }
    else{
        echo "Something went wrong";
    }
}   
mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}
}
?>









<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CGC EVENT MANAGMENT</title>
</head>
<style>
* {
    margin: 0;
    padding: 0;
}

html {
    scroll-behavior: smooth;
}
.container #contact{
    /* background-color: black; */
    background:url('rg.jpg')no-repeat center center/cover;
    height:90vh;
    width: 210vh;
    margin-left:-82px;
}

</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">CGC</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="project.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="services.php">Services</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Events
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="./tech.html">Technical</a></li>
                        <li><a class="dropdown-item" href="./non-tech.html">Non-Technical</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Other Events</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="contact.php">contact</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
    </nav>
    <div class="container">
    <section id="contact">
    <h1><center>Please Register Here <center></h1>
      <hr>
      <div class="container mt-4">
          
      <form action ="" method ="post">
        <div class="col-md-12">
          <label for="inputEmail4" class="form-label">username</label>
          <input type="text" class="form-control" name="username" id="inputEmail4" placeholder="username">
        </div>
        
        <div class="col-4">
          <label for="inputAddress" class="form-label"> rollno</label>
          <input type="text" class="form-control" name="rollno" id="inputAddress" placeholder ="rollno">
        </div>
        <div class="col-4">
          <label for="inputAddress2" class="form-label"> MobileNo </label>
          <input type="text" class="form-control" name="MobileNo" id="inputAddress2" placeholder ="MobileNo">
        </div>
        <div class="col-6">
          <label for="inputAddress2" class="form-label"> Email </label>
          <input type="Email" class="form-control" name="Email" id="inputAddress2" placeholder ="Email">
        </div>
        <div class="col-md-4">
          <label for="inputEvents" class="form-label">events</label>
          <select id="inputState" class="form-select">
            <option selected>Technical</option>
            <option>Non-Technical</option>
            <option>badminton tournament</option>
            <option>football team selection</option>
            <option>Anchoring</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="inputPassword4" class="form-label">Branch/department</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-4">
          <label for="inputCity" class="form-label">Semester</label>
          <input type="text" class="form-control" id="inputCity">
        </div>
        
        
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
      </form>
      </div>
      </div>
    </section>
          <!-- Optional JavaScript; choose one of the two! -->
      
          <!-- Option 1: Bootstrap Bundle with Popper -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      
          <!-- Option 2: Separate Popper and Bootstrap JS -->
          <!--
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
          -->
        </body>
      
 </html>
   
 