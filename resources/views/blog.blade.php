@extends('layout')
@section('content')

  <style>
    /* Full-width input fields */
    input[type=text], input[type=password] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
    }

    /* Add a background color when the inputs get focus */
    input[type=text]:focus, input[type=password]:focus {
      background-color: #ddd;
      outline: none;
    }

    /* Set a style for all buttons */
    button {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
    }

    button:hover {
      opacity:1;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
      padding: 14px 20px;
      background-color: #f44336;
      width: 50% !important;
    }


    /* Float cancel and signup buttons and add an equal width */
    .modal>.cancelbtn, .modal>.signupbtn {
      float: left;
      width: 50% !important;
    }

    /* Add padding to container elements */
    .container {
      padding: 16px;
    }

    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: #474e5d;
      padding-top: 50px;
    }

    /* Modal Content/Box */
    .modal-content {
      background-color: #fefefe;
      margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
      border: 1px solid #888;
      width: 80%; /* Could be more or less, depending on screen size */
    }

    /* Style the horizontal ruler */
    hr {
      border: 1px solid #f1f1f1;
      margin-bottom: 25px;
    }

    /* The Close Button (x) */
    .close {
      position: absolute;
      right: 35px;
      top: 15px;
      font-size: 40px;
      font-weight: bold;
      color: #f1f1f1;
    }

    .close:hover,
    .close:focus {
      color: #f44336;
      cursor: pointer;
    }

    /* Clear floats */
    .clearfix::after {
      content: "";
      clear: both;
      display: table;
    }

    /* Change styles for cancel button and signup button on extra small screens */
    @media screen and (max-width: 300px) {
      .cancelbtn, .signupbtn {
        width: 100%;
      }
    }

    /*Log in */
    form {border: 3px solid #f1f1f1;}

    input[type=text], input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    button {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      opacity: 0.8;
    }

    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }

    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
    }

    img.avatar {
      width: 40%;
      border-radius: 50%;
    }

    .container {
      padding: 16px;
    }

    span.psw {
      float: right;
      padding-top: 16px;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
        display: block;
        float: none;
      }
      .cancelbtn {
        width: 100%;
      }
    }
  </style>
</head>
<body>

<!-- END head -->

<section class="site-hero overlay page-inside" style="background-image: url(img/hero_2.jpg)">
  <div class="container">
    <div class="row site-hero-inner justify-content-center align-items-center">
      <div class="col-md-10 text-center">
        <h1 class="heading" data-aos="fade-up">Blog</h1>
        <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100">Events, news and activities in the hotel.</p>
      </div>
    </div>
    <!-- <a href="#" class="scroll-down">Scroll Down</a> -->
  </div>
</section>
<!-- END section -->


<section class="section bg-light post">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Login Form</h2>

        <form action="https://www.w3schools.com/action_page.php">
          <div class="imgcontainer">
            <img src="img/img_avatar2.png" alt="Avatar" class="avatar">
          </div>

          <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit">Login</button>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label><hr>
            <label>No account yet?</label>
            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>
            <button type="button" class="cancelbtn">Cancel</button>

            <span class="psw">Forgot <a href="#">password?</a></span>
          </div>

          <div class="container" style="background-color:#f1f1f1">

          </div>
        </form>


        <div id="id01" class="modal">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          <form class="modal-content" action="https://www.w3schools.com/action_page.php">
            <div class="container">
              <h1>Sign Up</h1>
              <p>Please fill in this form to create an account.</p>
              <hr>
              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter Email" name="email" required>

              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>

              <label for="psw-repeat"><b>Repeat Password</b></label>
              <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

              <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
              </label>

              <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

              <div class="clearfix">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">Sign Up</button>
              </div>
            </div>
          </form>
        </div>
      </div>

      {{-- <div class="col-md-8">
        <div class="row mb-5">
          <div class="col-md-6">
            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="img/img_1.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post">February 26, 2018</span>
                <h2 class="mt-0 mb-3"><a href="#">Drinks and Foods At Your Door</a></h2>
              </div>
            </div>
          </div>
          <div class="col-md-6">
             <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="img/img_2.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post">February 26, 2018</span>
                <h2 class="mt-0 mb-3"><a href="#">Five Reasons to Stay at Villa Resort</a></h2>
              </div>
            </div>
          </div>


          <div class="col-md-6">
            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="img/img_1.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post">February 26, 2018</span>
                <h2 class="mt-0 mb-3"><a href="#">Drinks and Foods At Your Door</a></h2>
              </div>
            </div>
          </div>
          <div class="col-md-6">
             <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="img/img_2.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post">February 26, 2018</span>
                <h2 class="mt-0 mb-3"><a href="#">Five Reasons to Stay at Villa Resort</a></h2>
              </div>
            </div>
          </div>


          <div class="col-md-6">
            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="img/img_1.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post">February 26, 2018</span>
                <h2 class="mt-0 mb-3"><a href="#">Drinks and Foods At Your Door</a></h2>
              </div>
            </div>
          </div>
          <div class="col-md-6">
             <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="img/img_2.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post">February 26, 2018</span>
                <h2 class="mt-0 mb-3"><a href="#">Five Reasons to Stay at Villa Resort</a></h2>
              </div>
            </div>
          </div>


        </div>

        <div class="row">
          <div class="col-md-12">
            <nav role="navigation">
              <ul class="pagination custom-pagination pagination-lg">
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item ">
                  <a class="page-link " href="#">2</a>
                </li>
                <li class="page-item ">
                  <a class="page-link" href="#">3</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div> --}}-->
      <!-- END content -->
      <!-- <div class="col-md-4">
        <div class="row">

          <div class="col-md-11 ml-auto">


            <form action="#" class="sidebar-search">
              <div class="form-group">
                <span class="fa fa-search icon-search"></span>
                <input type="text" class="form-control search-input"  placeholder="Search...">
              </div>
            </form>

            <div class="side-box">
              <h2 class="heading">Popular Post</h2>
              <ul class="post-list list-unstyled">
                <li>
                  <a href="#" class="d-flex">
                    <span class="mr-3 image"><img src="img/img_1.jpg" alt="Image placeholder" class="img-fluid"></span>
                    <div>
                      <span class="meta">February 27, 2018</span>
                      <h3>Five Reasons to Stay at Villa Resort</h3>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#" class="d-flex">
                    <span class="mr-3 image"><img src="img/img_2.jpg" alt="Image placeholder" class="img-fluid"></span>
                    <div>
                      <span class="meta">February 27, 2018</span>
                      <h3>Five Reasons to Stay at Villa Resort</h3>
                    </div>
                  </a>
                </li>

                <li>
                  <a href="#" class="d-flex">
                    <span class="mr-3 image"><img src="img/img_1.jpg" alt="Image placeholder" class="img-fluid"></span>
                    <div>
                      <span class="meta">February 27, 2018</span>
                      <h3>Five Reasons to Stay at Villa Resort</h3>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#" class="d-flex">
                    <span class="mr-3 image"><img src="img/img_2.jpg" alt="Image placeholder" class="img-fluid"></span>
                    <div>
                      <span class="meta">February 27, 2018</span>
                      <h3>Five Reasons to Stay at Villa Resort</h3>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#" class="d-flex">
                    <span class="mr-3 image"><img src="img/img_3.jpg" alt="Image placeholder" class="img-fluid"></span>
                    <div>
                      <span class="meta">February 27, 2018</span>
                      <h3>Five Reasons to Stay at Villa Resort</h3>
                    </div>
                  </a>
                </li>
              </ul>
            </div>

            <div class="side-box">
              <h2 class="heading">Categories</h2>
              <ul class="post-categories list-unstyled">
                <li><a href="#">Events <span class="count">(12)</span></a></li>
                <li><a href="#">Resto bar <span class="count">(4)</span></a></li>
                <li><a href="#">Celebration <span class="count">(23)</span></a></li>
                <li><a href="#">Promos <span class="count">(8)</span></a></li>
              </ul>
            </div>

          </div>




        </div>

      </div>
    </div>
  </div>
</section>
<footer class="section footer-section">
  <div class="container">
    <div class="row mb-4">
      <div class="col-md-3 mb-5">
        <ul class="list-unstyled link">
          <li><a href="#">About Us</a></li>
          <li><a href="#">Terms &amp; Conditions</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Help</a></li>
          <li><a href="#">Rooms</a></li>
        </ul>
      </div>
      <div class="col-md-3 mb-5">
        <ul class="list-unstyled link">
          <li><a href="#">Our Location</a></li>
          <li><a href="#">The Hosts</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Restaurant</a></li>
        </ul>
      </div>
      <div class="col-md-3 mb-5 pr-md-5 contact-info">
        <p><span class="d-block">Address:</span> <span> 98 West 21th Street, Suite 721 New York NY 10016</span></p>
        <p><span class="d-block">Phone:</span> <span> (+1) 435 3533</span></p>
        <p><span class="d-block">Email:</span> <span> info@yourdomain.com</span></p>
      </div>
      <div class="col-md-3 mb-5">
        <p>Sign up for our newsletter</p>
        <form action="#" class="footer-newsletter">
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Your email...">
            <button type="submit" class="btn"><span class="fa fa-paper-plane"></span></button>
          </div>
        </form>
      </div>
    </div>
    <div class="row bordertop pt-5">
      <p class="col-md-6 text-left"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

      <h2>Informations</h2>
        <table class="table">
          <tr>
            <th>Friends</th>
            <th>{{$data->friends}}</th>
          </tr>
          <tr>
            <th>Name</th>
            <th>{{$data->name}}</th>
          </tr>
          <tr>
            <th>City</th>
            <th>{{$data->city}}</th>
          </tr>
          <tr>
            <th>Region</th>
            <th>{{$data->region}}</th>
          </tr>
          <tr>
            <th>Photos</th>
            <th>{{$data->photos}}</th>
          </tr>
      </table>
    </div>

        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

      <p class="col-md-6 text-right social">
        <a href="#"><span class="fa fa-tripadvisor"></span></a>
        <a href="#"><span class="fa fa-facebook"></span></a>
        <a href="#"><span class="fa fa-twitter"></span></a>
      </p>
    </div>
  </div>
</footer>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/main.js"></script>
<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

</body>
</html>
  @endsection
