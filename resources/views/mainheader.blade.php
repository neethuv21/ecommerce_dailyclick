<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>DailyClick</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
             <img src="images/logo.png" alt="" ><span>
              DailyClick
            </span>
          </a>

          <div class="navbar-collapse" id="">
            <div class="container">
              <div class=" mr-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav justify-content-between ">
                  <div class="d-none d-lg-flex">
                     <li class="nav-item">
                      <a class="nav-link" href="/home">
                        HOME</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/products">
                        PRODUCTS</a>
                    </li>
                    <div class="nav-item dropdown">
                      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Register</a>
                      <div class="dropdown-menu">
                        <a href="/vendorregister" class="dropdown-item">Vendor</a>
                        <a href="/customerregister" class="dropdown-item">Customer</a>
                      </div>
                    </div>
                    <div class="nav-item dropdown">
                      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Login</a>
                      <div class="dropdown-menu">
                        <a href="/adminlogin" class="dropdown-item">Admin</a>
                        <a href="/customerlogin" class="dropdown-item">Customer</a>
                        <a href="/vendorlogin" class="dropdown-item">Vendor</a>
                      </div>
                    </div>


                     
                
                <li class="nav-item">
                      <a class="nav-link" href="\contact">
                        Contact
                      </a>
                    </li>



                    <li class="nav-item">
                      <a class="nav-link" href="\about">
                        About
                      </a>
                    </li>
                    <!--  <li class="nav-item">
                      <a class="nav-link" href="\editprofile">
                        Edit Profile
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="\feedback">
                        Feedback
                      </a>
                    </li> -->
                  </div>
                  <div class=" d-none d-lg-flex">
                    <!-- <li class="nav-item">
                      <a class="nav-link" href="contact.html">
                        Login / Register
                      </a>
                    </li> -->
                    <form class="form-inline my-2 ml-5 mb-3 mb-lg-0">
                      <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                    </form>
                  </div>
                </ul>
              </div>
            </div>

            <div class="custom_menu-btn">
              <button onclick="openNav()"></button>
            </div>
            <div id="myNav" class="overlay">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <div class="overlay-content">
                <a href="index.html">HOME</a>
                <a href="product.html">PRODUCTS</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    @yield('mainbody')


    <!-- footer section -->
  <section class="container-fluid footer_section" style="height: 50px;">
    <p>
      Copyright &copy; 2022 All Rights Reserved By
      <a href="https://html.design/">DailyClick</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }
  </script>
</body>

</html>