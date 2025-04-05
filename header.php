<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <!-- fonts links -->
   <style>
      *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
   
}
/* top navbar */
.top-navbar{
    display: flex;
    justify-content: space-between;
}
.top-navbar p{
    margin-top: 13px;
    margin-left: 15px;
}
.top-navbar .icons{
    margin-top: 13px;
    margin-right: 15px;
}
.top-navbar a{
    text-decoration: none;
    color: black;
    margin-left: 10px;
}
.top-navbar a img{
    margin-bottom: 3px;
}
.top-navbar a:hover{
    color: black;
}
@media screen and (max-width:400px){
    .top-navbar a{
        font-size: 13px;
    }
    .top-navbar a img{
        width: 15px;
    }
    .top-navbar p{
        font-size: 13px;
    }
}
@media screen and (max-width:320px){
    .top-navbar a{
        font-size: 10px;
    }
    .top-navbar a img{
        width: 13px;
    }
    .top-navbar p{
        font-size: 10px;
    }
}
@media screen and (max-width:318px){
    .top-navbar a{
        font-size: 8px;
        margin-left: 0;
    }
    .top-navbar a img{
        width: 10px;
        margin-left: 0;
    }
    .top-navbar p{
        font-size: 10px;
        margin-top: 20px;
    }
}
/* top navbar */

/* navbar */
#navbar{
    background-color: rgb(3, 2, 2);
}
#logo{
    margin-left: 15px;
    color: white;
    font-size: 25px;
    font-weight: bold;
    margin-bottom: 6px;
}
#logo span{
    color: #ffc800;
}
#logo #span1{
    font-size: 30px;
}
.navbar-nav{
    margin-left: 20px;
}
.nav-item{
    margin-left: 10px;
}
.nav-item .nav-link{
    color: white;
    margin-left: 2px;
    text-shadow: 0px 0px 1px black;
    transition: 0.5s ease;
}
.nav-item .nav-link:hover{
    color: #ffc800;
}
.dropdown-menu li a{
    color: white;
    transition: 0.5s ease;
}
.dropdown-menu li a:hover{
    background-color: rgb(67 0 86);
    color: #ffc800;
}
#search input{
    border-radius: 50px;
    border: none;
}
#search button{
    border-radius: 50px;
    color: white;
    border: 1px solid #ffc800;
    background-color: #ffc800;
}
/* navbar */

   </style>
</head>
<body>
   <!-- Header Section -->
   
    <!-- top navbar -->
    <div class="top-navbar">
        <p>WELCOME TO OUR SHOP</p>
        <div class="icons">
            <a href="login.html"><img src="./images/register.png" alt="" width="18px">Login</a>
            <a href="register.html"><img src="./images/register.png" alt="" width="18px">Sing UP</a>
        </div>
    </div>
    <!-- top navbar -->

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html" id="logo"><span id="span1">Papu</span> <span>Shop</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src="./images/menu.png" alt="" width="30px"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Product</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgb(3, 3, 3);">
                  <li><a class="dropdown-item" href="#">Mobile Phone</a></li>
                  <li><a class="dropdown-item" href="#">Smart watch</a></li>
                  <li><a class="dropdown-item" href="#">Charger</a></li>
                  <li><a class="dropdown-item" href="#">Pendrive</a></li>
                  <li><a class="dropdown-item" href="#">Samrt Watch</a></li>
                  <li><a class="dropdown-item" href="#">Headphone</a></li>
                  <li><a class="dropdown-item" href="#">Memory Card</a></li>
                  <li><a class="dropdown-item" href="#">RETURN</a></li>
                  <li><a class="dropdown-item" href="#">RETURN</a></li>
                  <li><a class="dropdown-item" href="#">Cover </a></li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Card</a>
              </li>
            </ul>
            
    <form class="d-flex" id="search" >
  <input class="form-control me-2" type="search" id="searchInput" placeholder="Search Products..." aria-label="Search">
  <button class="btn btn-outline-success" type="submit"> <a class="nav-link" href="search.html">Search</a></button>
    </form>
          </div>
        </div>
      </nav>
    <!-- navbar -->
   



  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </script>
</body>
</html>
