<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pappu mobile Shop</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <!-- fonts links -->
</head>
<body>

    <!-- top navbar -->
    <div class="top-navbar">
        <p>WELCOME TO Pappu Mobile  SHOP</p>
        <div class="icons">
            <a href="#"><img src="./images/register.png" alt="" width="18px">Login</a>
            <a href="#"><img src="./images/register.png" alt="" width="18px">Sing UP</a>
        </div>
    </div>
    <!-- top navbar -->

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php" id="logo"><span id="span1">Pappu</span> <span>Shop</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src="./images/menu.png" alt="" width="30px"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">REPAIR</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgb(5, 1, 0);">
                 
                  <li><a class="dropdown-item" href="#">Mobile Phone</a></li>
                  <li><a class="dropdown-item" href="#">Smart watch</a></li>
                  <li><a class="dropdown-item" href="#">Charger</a></li>
                  <li><a class="dropdown-item" href="#">Pendrive</a></li>
                  <li><a class="dropdown-item" href="#">Samrt Watch</a></li>
                  <li><a class="dropdown-item" href="#">Headphone</a></li>
                  <li><a class="dropdown-item" href="#">Memory Card</a></li>
                  <li><a class="dropdown-item" href="#">Cover </a></li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Order</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Cart</a>
              </li>
            </ul>
            <!-- <form class="d-flex" id="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
            <!-- Search Bar Section -->
    <form class="d-flex" id="search" onsubmit="searchProducts(event)">
  <input class="form-control me-2" type="search" id="searchInput" placeholder="Search Products..." aria-label="Search">

    </form>
          </div>
        </div>
      </nav>
    <!-- navbar -->
    






    
    <!-- home content -->
    <section class="home">
    <div class="content">
      <h1> <span>Electronic Products</span>
        <br>
        Up To <span id="span2">50%</span> Off
      </h1>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta, saepe.
        <br>Lorem ipsum dolor sit amet consectetur.
      </p>
      <div class="btn"><button>Shop Now</button></div>

    </div>
    <div class="img">
      <img src="./image/banner/Banner0.png" alt="">
    </div>
  </section>
    <!-- home content -->








    <!-- product cards -->
    <div class="container" id="product-cards">
      <h1 class="text-center">PRODUCTS</h1>
      <div class="row" style="margin-top: 30px;">
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./images/p6.png" alt="">
            <div class="card-body">
              <h3 class="text-center">Mobile</h3>
              <p class="text-center">Lorem ipsum dolor sit amet.</p>
              
              <h2>1,31,1000 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./images/a1.png" alt="">
            <div class="card-body">
              <h3 class="text-center">Airpods</h3>
              <p class="text-center">Lorem ipsum dolor sit amet.</p>
              
              <h2>1,500 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./image/products/chargers/lyne1.png" alt="">
            <div class="card-body">
              <h3 class="text-center">Charger</h3>
              <p class="text-center">Lyne.</p>
              
              <h2>1,200 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./images/t1.png" alt="">
            <div class="card-body">
              <h3 class="text-center">Ipad</h3>
              <p class="text-center">Lorem ipsum dolor sit amet.</p>
              
              <h2>50,300 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
            </div>
          </div>
        </div>
      </div>

      <div class="row" style="margin-top: 30px;">
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./images/w1.png" alt="">
            <div class="card-body">
              <h3 class="text-center">Smart Watch</h3>
              <p class="text-center">Lorem ipsum dolor sit amet.</p>
              
              <h2>1,200 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./image/products/headphones/apple.png" alt="">
            <div class="card-body">
              <h3 class="text-center">headphones</h3>
              <p class="text-center">Lorem ipsum dolor sit amet.</p>
              
              <h2>1,600 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./image/products/burds/boat0.png" alt="">
            <div class="card-body">
              <h3 class="text-center">Burds</h3>
              <p class="text-center">Lorem ipsum dolor sit amet.</p>
              
              <h2>45,500 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./image/products/headphones/boat3.png" alt="">
            <div class="card-body">
              <h3 class="text-center">Headphone </h3>
              <p class="text-center">Boat  headphone</p>
              
              <h2>800<span><li class="fa-solid fa-cart-shopping"></li></span></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- product cards -->









    <!-- other cards -->
    <div class="container" id="other-cards">
      <div class="row">
        <div class="col-md-6 py-3 py-md-0">
          <div class="card">
            <img src="./images/c1.png" alt="">
            <div class="card-img-overlay">
              <h3>Best Burds</h3>
              <h5>Latest Collection</h5>
              <p>Up To 50% Off</p>
              <button id="shopnow">Shop Now</button>
            </div>
          </div>
        </div>
        <div class="col-md-6 py-3 py-md-0">
          <div class="card">
            <img src="./images/c2.png" alt="">
            <div class="card-img-overlay">
              <h3>Best Headphone</h3>
              <h5>Latest Collection</h5>
              <p>Up To 50% Off</p>
              <button id="shopnow">Shop Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- other cards -->
   






    <!-- banner -->
    <section class="banner">
      <div class="content">
        <h1> <span>Electronic Gadget</span>
          <br>
          Up To <span id="span2">50%</span> Off
        </h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta, saepe.
          <br>Lorem ipsum dolor sit amet consectetur.
        </p>
        <div class="btn"><button>Shop Now</button></div>
  
      </div>
      <div class="img">
        <img src="./image/banner/Banner3.png" alt="">
      </div>
    </section>
    <!-- banner -->








    <!-- product cards -->
    <div class="container" id="product-cards">

      <div class="row" style="margin-top: 30px;">
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./images/p6.png" alt="">
              <div class="card-body">
                <h3 class="text-center">Iphone 13 pro</h3>
                <p class="text-center">Lorem ipsum dolor sit amet.</p>
              
              <h2>12,100<span><li class="fa-solid fa-cart-shopping"></li></span></h2>
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./images/w1.png" alt="">
            <div class="card-body">
              <h3 class="text-center">Smart Watch</h3>
              <p class="text-center">Lorem ipsum dolor sit amet.</p>
              
              <h2>1,200 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
             <img src="./images/phone1.png" alt="">
            <div class="card-body">
              <h3 class="text-center">iPhone x</h3>
              <p class="text-center">Lorem ipsum dolor sit amet.</p>
              
              <h2>50,300 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./image/products/headphones/boat1.png" alt="">
            <div class="card-body">
              <h3 class="text-center">Headphone</h3>
              <p class="text-center">best sound</p>
              
              <h2>800 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
            </div>
          </div>
        </div>
      </div>

      <!-- other cards -->
    
    <!-- other cards -->




      <div class="row" style="margin-top: 30px;">
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./image/products/smartphones/mi a3.png" alt="">
            <div class="card-body">
              <h3 class="text-center">Mi</h3>
              <p class="text-center">Lorem ipsum dolor sit amet.</p>
              
              <h2>19,350 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
            </div>
          </div>
        </div>
        
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./image/products/smartphones/Vivo T3 .png" alt="">
            <div class="card-body">
              <h3 class="text-center">Vivo T3 5G</h3>
              <p class="text-center">Lorem ipsum dolor sit amet.</p>
              
              <h2>15,000 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
            </div>
          </div>
        </div>


        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./image/products/smartphones/redmi note 12.png" alt="">
            <div class="card-body">
              <h3 class="text-center"> Redmi note 12 </h3>
              <p class="text-center">Lorem ipsum dolor sit amet.</p>
             
              <h2>25,000 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
            </div>
          </div>
        </div>


        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./image/products/chargers/lyne5.png" alt="">
            <div class="card-body">
              <h3 class="text-center"> lyne charger</h3>
              <p class="text-center">Lorem ipsum dolor sit amet.</p>
              
              <h2>450 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
            </div>
          </div>
        </div>
      </div>



      <div class="row" style="margin-top: 30px;">
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./images/pr9.png" alt="">
            <div class="card-body">
              <h3 class="text-center">Smart Watch</h3>
              <p class="text-center">Lorem ipsum dolor sit amet.</p>
              
              <h2>1,200<span><li class="fa-solid fa-cart-shopping"></li></span></h2>
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./images/pr10.png" alt="">
            <div class="card-body">
              <h3 class="text-center">Power Bank</h3>
              <p class="text-center">Lorem ipsum dolor sit amet.</p>
              
              <h2>400 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./image/products/headphones/headphones1.png" alt="">
            <div class="card-body">
              <h3 class="text-center">Wireless headphone</h3>
              <p class="text-center">Lorem ipsum dolor sit amet.</p>
              
              <h2>1,330 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./image/products/chargers/Oneplus1.png" alt="">
            <div class="card-body">
              <h3 class="text-center">charger</h3>
              <p class="text-center">Lorem ipsum dolor sit amet.</p>
              
              <h2>1,150 <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- product cards -->









    <!-- offer -->
    <div class="container" id="offer">
      <div class="row">
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-cart-shopping"></i>
          <h3> Shipping card discount up 30% off</h3>
          <p>On order over 2,000</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-rotate-left"></i>
          <h3>Free Returns</h3>
          <p>Within 7 days</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-truck"></i>
          <h3>Fast Delivery</h3>
          <p>World Wide</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-thumbs-up"></i>
          <h3>Big choice</h3>
          <p>Of products</p>
        </div>
      </div>
    </div>
    <!-- offer -->

    <!-- footer -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>Pappu Mobile Shop</h3>
              <p>
                Goverment Polytechnic Road Sendurwafa <br>
                Ta: SAKOLI  Dis:Bhandara  <br>
                 pin:441802 <br>
              </p>
              <strong>Phone:</strong> 8830014407 <br>
              <strong>Email:</strong> pappushop@gmail.com <br>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Usefull Links</h4>
             <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policey</a></li>
             </ul>
            </div>



           

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Services</h4>

             <ul>
              <li><a href="#">Smart Phone</a></li>
              <li><a href="#">Smart Watch</a></li>
              <li><a href="#">Chargers</a></li>
              <li><a href="#">Cover</a></li>
              <li><a href="#">Repair Services</a></li>
             </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Social Networks</h4>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, quibusdam.</p>

              <div class="socail-links mt-3">
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-skype"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
              </div>
            
            </div>

          </div>
        </div>
      </div>
      <hr>
      <div class="container py-4">
        <div class="copyright">
          &copy; Copyright <strong><span>Pappu Shop</span></strong>. All Rights Reserved 2025
        </div>
        <div class="credits">
          Designed by <a href="#">Rohan</a>
        </div>
      </div>
    </footer>
    <!-- footer -->



    <script src="script.js"></script>



    <a href="#" class="arrow"><i><img src="./images/arrow.png" alt=""></i></a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>