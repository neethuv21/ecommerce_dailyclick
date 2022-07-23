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

  <title>DailyMart</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="/css/responsive.css" rel="stylesheet" />
</head>

<body style="background-color: lavender;">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <!-- <img src="/images/logo.png" alt="" /> -->
            

            <span style="margin-left:10px;">
              DailyMart
            </span>
          </a>

          <div class="navbar-collapse" id="">
            <div class="container">
              <div class=" mr-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav justify-content-between ">
                  <div class="d-none d-lg-flex">
                     <li class="nav-item">
                      <a class="nav-link" href="\customerhome">
                        HOME</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="\editprofile">
                       Edit Profile</a>
                    </li>
                    
                
                <li class="nav-item">
                      <a class="nav-link" href="\feedback">
                        Feedback
                      </a>
                    </li>
                      
                      
                     <div class="nav-item dropdown">
                      <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">All Category</a>
                      <div class="dropdown-menu">
                        @foreach($cate as $value)
                        <a href="\selectproduct\{{$value->id}}" class="dropdown-item" value="{{$value->category}}">{{$value->category}}</a>
                       @endforeach
                      </div>



                    </div>
                    <li class="nav-item">
                      @foreach($cart as $value)
                      <a class="nav-link" href="/viewcart">Cart({{$value->cart}})
                        @endforeach
                      </a>
                    
                     
                    </li> 

                     <li class="nav-item">
                      <a class="nav-link" href="/vieworders">
                      View Orders
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/logout">
                       Logout
                      </a>
                    </li>



                  </div>
                  <div class=" d-none d-lg-flex">
                    
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
    @yield('customerbody')


    <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2019 All Rights Reserved By
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="/js/bootstrap.js"></script>

  <script>
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }
  </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
    $(".quantity").on('change',function(){
    var id=$("#id").val();
    var quantity=$(".quantity").val();
    var prize=$("#prize").val();
   
    var total=parseInt(quantity)*parseInt(prize);
    
    $("#total").val(total);
    
    

     // $.ajax({
     // type:"post",
     // url:"/productdetail",
     // data:{
     //                id:id,
     //           quantity:quantity,
     //                total:total
                    
     //          },
     //         success:function(result)
     //        {
                    
     //      // $('#total').html(result);
     //       }
     //      });
          });
          });
       </script>
      </body>

          </html>