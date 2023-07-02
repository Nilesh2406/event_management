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
    <style>
        
            .btn-secondary{
                margin-left: 600px;
                

        }
        .slide{
            height: 400px;
            width: 1270px;
        }
        .col img{
height: 200px;
width: 200px;
        }
        .raj{
            margin: 50px;
        }
       .nilesh{
           margin-left: 400px;
       }
     
    </style>
</head>
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
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="about.php">About</a>
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
                  <a class="nav-link" href="contact.php">contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php">LOGOUT</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <div class="mx-2">
                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#loginModal">login</button>
            </div>
        </div>
    </div>
</nav>
<!-- Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Log in to CGC Events Management</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./slide3.jpg " class="slide" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>CGC EVENT MANAGMENT</h5>
          <p>Some representative placeholder content for the first slide.</p>
          <button class="btn btn-danger">clubs</button>
          <button class="btn btn-primary">information</button>
          <button class="btn btn-success">Events</button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./slide.jpg" class="slide" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>CGC EVENT MANAGMENT</h5>
          <p>Some representative placeholder content for the second slide.</p>
          <button class="btn btn-danger">clubs</button>
          <button class="btn btn-primary">information</button>
          <button class="btn btn-success">Events</button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./slide1.jpg" class="slide" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>CGC EVENT MANAGMENT</h5>
          <p>Some representative placeholder content for the third slide.</p>
          <button class="btn btn-danger">clubs</button>
          <button class="btn btn-primary">information</button>
          <button class="btn btn-success">Events</button>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <br>
  <br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
    <div class="card-group">
      <div class="card">
        <img src="./pics/4.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Jashan 2k21  </h5>
          <p class="card-text"> when Arjan Dhilllon came in the freshers of cgc landrean.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="./pics/5.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kade haan kade naa</h5>
          <p class="card-text">When the starcast of kade haan kade naa has arrived in the college</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="./pics/3.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Jashan 2k21</h5>
          <p class="card-text">The judges in the final round of MR and Mis Freshers </p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    <div class="card-group">
      <div class="card">
        <img src="./pics/19.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">FFA Editing</h5>
          <p class="card-text">The pixel club organized the FFA Editing event in the campus</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="./pics/7.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Hunt for talent</h5>
          <p class="card-text">Hunt for talent is organized by department of student welfare
            here all clubs have their own events.
          </p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="./pics/2.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">International Volunteer Day</h5>
          <p class="card-text">Grab this opportunity to became a volunteer in any event..</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    <div class="card-group">
      <div class="card">
        <img src="./pics/1.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Xpedition 2k21</h5>
          <p class="card-text">the event include tresure hunt,waste out of best and road map</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="./pics/18.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Story writing</h5>
          <p class="card-text">There is story telling and story writing compitison under rangmunch club.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="./pics/20.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Xpedition 2k21</h5>
          <p class="card-text">Xpedition 2k21 for the pixel club free foor all is potography and digital art.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    <div class="card-group">
      <div class="card">
        <img src="./pics/12.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Talent Hunt</h5>
          <p class="card-text">the events under this is techtonic and sherlok in you inside the campous of cgc landran .</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="./pics/13.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Techtonic event</h5>
          <p class="card-text">Tis event include 2 rounds <br>
            1st round is apptitude and technical test<br>
            2nd round is speak up.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="./pics/14.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Sherlock in You</h5>
          <p class="card-text">This event is procced in two rounds<br>
          the events came under the club of tech amigos</p>
         
        </div>
      </div>
    </div>
    <div class="card-group">
      <div class="card">
        <img src="./pics/6.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Xpedition 2k21</h5>
          <p class="card-text">Xpedition 2k21 include Hunt for talent event inside the campus of cgc landran</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="./pics/8.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Baisakhi 2k21</h5>
          <p class="card-text">There is list of various events conducted on the day of baisakhi.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="./pics/9.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Interdepartment badminton tournament</h5>
          <p class="card-text">This event comes under the champion club "the interdepartment badminton tournament"</p>
         
        </div>
      </div>
    </div><div class="card-group">
      <div class="card">
        <img src="./pics/10.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">National Engineers day</h5>
          <p class="card-text">There is various events conducted in occassion of Engineers day</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="./pics/11.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Youthega 2k21</h5>
          <p class="card-text"> PUBG and TAMBOLA events are there under the champions club.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="./pics/15.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">State Out Loud</h5>
          <p class="card-text">state out loud events came under the fleming desire club.</p>
         
        </div>
      </div>
    </div><div class="card-group">
      <div class="card">
        <img src="./pics/16.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Writing compitison</h5>
          <p class="card-text">writing compitison came under the fleming desire club</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="./pics/17.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Flaming join Club</h5>
          <p class="card-text">join The Fleming Desire club Now.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="./pics/14.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">sherlock in you </h5>
          <p class="card-text">this is a fun activity event.help to boost the confidence </p>
         
        </div>
      </div>
    </div>
    <br>
    <br>

    <footer class="bd-footer py-5 mt-5 bg-light">
      <div class="container py-5">
        <div class="row">
          <div class="col-lg-3 mb-3">
            <!-- <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="/" aria-label="Bootstrap">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="d-block me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"/></svg> -->
              <span class="fs-5">CGC EVENT</span>
            </a>
            <ul class="list-unstyled small text-muted">
              <li class="mb-2">Designed and built by NILESH RAJ From CGC <a href="/docs/5.1/about/team/">CHANDIGARH ENGINEERING COLLEGE</a> In association with CGC faculty <a href="https://github.com/twbs/bootstrap/graphs/contributors">CGC LANRAN</a>.</li>
              <!-- <li class="mb-2">Code licensed <a href="https://github.com/twbs/bootstrap/blob/main/LICENSE" target="_blank" rel="license noopener">MIT</a>, docs <a href="https://creativecommons.org/licenses/by/3.0/" target="_blank" rel="license noopener">CC BY 3.0</a>.</li>
              <li class="mb-2">Currently v5.1.3.</li> -->
            </ul>
          </div>
          <div class="col-6 col-lg-2 offset-lg-1 mb-3">
            <h5>Links</h5>
            <ul class="list-unstyled">
              <li class="mb-2"><a href="/">Home</a></li>
              <li class="mb-2"><a href="/docs/5.1/">Docs</a></li>
              <li class="mb-2"><a href="/docs/5.1/examples/">Examples</a></li>
              <li class="mb-2"><a href="https://themes.getbootstrap.com/">Themes</a></li>
              <li class="mb-2"><a href="https://blog.getbootstrap.com/">Blog</a></li>
            </ul>
          </div>
          <div class="col-6 col-lg-2 mb-3">
            <h5>CLUBS</h5>
            <ul class="list-unstyled">
              <li class="mb-2"><a href="/docs/5.1/getting-started/">pixel club</a></li>
              <li class="mb-2"><a href="/docs/5.1/examples/starter-template/">prankmaster</a></li>
              <li class="mb-2"><a href="/docs/5.1/getting-started/webpack/">project display</a></li>
              <li class="mb-2"><a href="/docs/5.1/getting-started/parcel/">rangmunch club</a></li>
            </ul>
          </div>
          <div class="col-6 col-lg-2 mb-3">
            <h5>Projects</h5>
            <ul class="list-unstyled">
              <li class="mb-2"><a href="https://github.com/twbs/bootstrap">virasat club</a></li>
              <li class="mb-2"><a href="https://github.com/twbs/bootstrap/tree/v4-dev">tech amigos</a></li>
              <li class="mb-2"><a href="https://github.com/twbs/icons">techhunt</a></li>
              <li class="mb-2"><a href="https://github.com/twbs/rfs">flaming desire</a></li>
              <li class="mb-2"><a href="https://github.com/twbs/bootstrap-npm-starter">tech roadies</a></li>
            </ul>
          </div>
          <div class="col-6 col-lg-2 mb-3">
            <h5>Extra circular acitivity</h5>
            <ul class="list-unstyled">
              <li class="mb-2"><a href="https://github.com/twbs/bootstrap/issues">Science Day</a></li>
              <li class="mb-2"><a href="https://github.com/twbs/bootstrap/discussions">Sports Day</a></li>
              <li class="mb-2"><a href="https://github.com/sponsors/twbs">parivartan program</a></li>
              <li class="mb-2"><a href="https://opencollective.com/bootstrap">Enimens</a></li>
              <li class="mb-2"><a href="https://bootstrap-slack.herokuapp.com/">ideathon</a></li>
              <li class="mb-2"><a href="https://stackoverflow.com/questions/tagged/bootstrap-5">hackthon</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
   
    <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
  
  
  
    <script src="/docs/5.1/assets/js/docs.min.js"></script>
    
    
        
        
  
</body>

</html>
