<?php 
include('functions/userfunction.php');
include('includes/header.php');
include('includes/slider.php');
?>
<link href="assets/css/style.css" rel="stylesheet" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
@media screen and (max-width:426px) {
  .card{
    display:flex;
    width: 88px;
    height:140px;
  }
  .row>* {
    flex-shrink: 0;
    width: auto !important;
    max-width: 100%;
    padding-right: 5px;
    padding-bottom: 10px;
    padding-left:10px;
    margin-top: var(--bs-gutter-y);
    
}

.rfooter {
        display:flex;
       flex: 0 0 auto;
        max-width: 100%;
        padding-right: 2px;
        padding-left: calc(var(--bs-gutter-x)* .1);
        margin-top: 1px; 
}

.about{
padding-left: 20px !important;
padding-right:0px ;
}
.h6, h6 {
  font-size: 12px;
  color:black;
}
.card-body{
padding:7px !important;
}
}

.whatsapp-chat{
  bottom: 10px;
  left: 10px;
  position: fixed;
}
.review-container {
    width: 80%;
    margin: auto;
    background: white;
    border-radius: 10px;
    padding: 20px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

        .review-slider {
            position: relative;
            overflow: hidden;
        }

        .review-item {
            display: none;
            padding: 15px;
            border-radius: 10px;
            background: #f9f9f9;
            margin-bottom: 10px;
        }

        .review-item.active {
            display: block;
        }

        .stars {
            color: #f39c12;
            font-size: 18px;
        }

        .review-text {
            font-size: 16px;
            color: #333;
            margin: 10px 0;
        }
        .rfooter{
          display: flex;
          flex: nowrap;
        }

        .review-name {
            font-weight: bold;
            color: #555;
        }

        .arrow {
            cursor: pointer;
            font-size: 24px;
            color: #444;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }

        .left-arrow {
            left: 10px;
        }

        .right-arrow {
            right: 10px;
        }
        .card{
          height: 200px !important; 
        }
        .card-body{
            padding:7px !important;
            color: #000;
        }
      
        @media screen and (min-width:426px) and (max-width:769px) {
          .slideshow-container img{
            height: 250px;
        
        }
        .col-md-2{
          width:150px;
          height: 180px;

        }
        .card shadow{
          height: 180px !important; 
        }
        .rfooter{
          display: flex;
          flex: nowrap;
        }
      }
</style>
<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4>Trending Products</h4>
        <div class="underline"></div>
        <hr>
        <div class="row">
           <?php
           $trendingProducts = getAllTrending();
           if(mysqli_num_rows($trendingProducts) >0)
           {
            foreach($trendingProducts as $item){
              ?>
              <div class="col-md-2 mb-2">
                <a href="product-view.php?product=<?= $item['slug']; ?>">
                <div class="card shadow">
                  <div class="card-body">
                    <img src="uploads/<?= $item['image']; ?>" alt="Product Image"  class="w-100">
                   <h6 class="text-center"><?= $item['name']; ?></h6>    
                        <!-- <h6>Rs <span class="text-success fw-bold"><?= $item['selling_price']; ?></span></h6> -->
                  </div>
                </div>
                </a>
              </div>
              <?php
            }
           }


           ?>
                  </div>
               </div>
           </div>
        </div>
    </div>
       
   
    <div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4>Our Collections</h4>
        <div class="underline"></div>
        <hr>

        <!-- Display Mobile Products -->
        <h5>Mobiles</h5>
        <div class="row">
          <?php
          // Replace '1' with the actual category ID for Mobile
          $mobiles = getProductByCategory(1); // Fetch products under the Mobile category
          if(mysqli_num_rows($mobiles) > 0) {
            while($item = mysqli_fetch_assoc($mobiles)) {
              ?>
              <div class="col-md-2 mb-2">
                <a href="product-view.php?product=<?= $item['slug']; ?>">
                  <div class="card shadow">
                    <div class="card-body">
                      <img src="uploads/<?= $item['image']; ?>" alt="Product Image" class="w-100">
                      <h6 class="text-center"><?= $item['name']; ?></h6>    
                    </div>
                  </div>
                </a>
              </div>
              <?php
            }
          }
          ?>
        </div>

        <!-- Display Smartwatch Products -->
        <h5>Smartwatches</h5>
        <div class="row">
          <?php
          // Replace '2' with the actual category ID for Smartwatch
          $smartwatches = getProductByCategory(23); // Fetch products under the Smartwatch category
          if(mysqli_num_rows($smartwatches) > 0) {
            while($item = mysqli_fetch_assoc($smartwatches)) {
              ?>
              <div class="col-md-2 mb-2">
                <a href="product-view.php?product=<?= $item['slug']; ?>">
                  <div class="card shadow">
                    <div class="card-body">
                      <img src="uploads/<?= $item['image']; ?>" alt="Product Image" class="w-100">
                      <h6 class="text-center"><?= $item['name']; ?></h6>    
                    </div>
                  </div>
                </a>
              </div>
              <?php
            }
          }
          ?>
        </div>
        <!-- Display Smartwatch Products -->
        <h5> Burds</h5>
        <div class="row">
          <?php
          // Replace '2' with the actual category ID for Smartwatch
          $burds = getProductByCategory(20); // Fetch products under the Smartwatch category
          if(mysqli_num_rows($burds) > 0) {
            while($item = mysqli_fetch_assoc($burds)) {
              ?>
              <div class="col-md-2 mb-2">
                <a href="product-view.php?product=<?= $item['slug']; ?>">
                  <div class="card shadow">
                    <div class="card-body">
                      <img src="uploads/<?= $item['image']; ?>" alt="Product Image" class="w-100">
                      <h6 class="text-center"><?= $item['name']; ?></h6>    
                    </div>
                  </div>
                </a>
              </div>
              <?php
            }
          }
          ?>
        </div>


        <h5> charger</h5>
        <div class="row">
          <?php
          // Replace '2' with the actual category ID for Smartwatch
          $charger = getProductByCategory(19); // Fetch products under the Smartwatch category
          if(mysqli_num_rows($charger) > 0) {
            while($item = mysqli_fetch_assoc($charger)) {
              ?>
              <div class="col-md-2 mb-2">
                <a href="product-view.php?product=<?= $item['slug']; ?>">
                  <div class="card shadow">
                    <div class="card-body">
                      <img src="uploads/<?= $item['image']; ?>" alt="Product Image" class="w-100">
                      <h6 class="text-center"><?= $item['name']; ?></h6>    
                    </div>
                  </div>
                </a>
              </div>
              <?php
            }
          }
          ?>
        </div>

        <h5> Pendrive</h5>
        <div class="row">
          <?php
          // Replace '2' with the actual category ID for Smartwatch
          $Pendrive = getProductByCategory(27); // Fetch products under the Smartwatch category
          if(mysqli_num_rows($Pendrive) > 0) {
            while($item = mysqli_fetch_assoc($Pendrive)) {
              ?>
              <div class="col-md-2 mb-2">
                <a href="product-view.php?product=<?= $item['slug']; ?>">
                  <div class="card shadow">
                    <div class="card-body">
                      <img src="uploads/<?= $item['image']; ?>" alt="Product Image" class="w-100">
                      <h6 class="text-center"><?= $item['name']; ?></h6>    
                    </div>
                  </div>
                </a>
              </div>
              <?php
            }
          }
          ?>
        </div>

        <h5>  Cover</h5>
        <div class="row">
          <?php
          // Replace '2' with the actual category ID for Smartwatch
          $cover = getProductByCategory(24); // Fetch products under the Smartwatch category
          if(mysqli_num_rows($cover) > 0) {
            while($item = mysqli_fetch_assoc($cover)) {
              ?>
              <div class="col-md-2 mb-2">
                <a href="product-view.php?product=<?= $item['slug']; ?>">
                  <div class="card shadow">
                    <div class="card-body">
                      <img src="uploads/<?= $item['image']; ?>" alt="Product Image" class="w-100">
                      <h6 class="text-center"><?= $item['name']; ?></h6>    
                    </div>
                  </div>
                </a>
              </div>
              <?php
            }
          }
          ?>
        </div>

        <h5> OTG-TYPE C</h5>
        <div class="row">
          <?php
          // Replace '2' with the actual category ID for Smartwatch
          $OTG  = getProductByCategory(26); // Fetch products under the Smartwatch category
          if(mysqli_num_rows($OTG) > 0) {
            while($item = mysqli_fetch_assoc($OTG)) {
              ?>
              <div class="col-md-2 mb-2">
                <a href="product-view.php?product=<?= $item['slug']; ?>">
                  <div class="card shadow">
                    <div class="card-body">
                      <img src="uploads/<?= $item['image']; ?>" alt="Product Image" class="w-100">
                      <h6 class="text-center"><?= $item['name']; ?></h6>    
                    </div>
                  </div>
                </a>
              </div>
              <?php
            }
          }
          ?>
        </div>

        <!-- Add more categories like Tablets, Headphones, etc., in the same way -->
        <h5> Headphones</h5>
        <div class="row">
          <?php
          // Replace '3' with the actual category ID for Headphones
          $headphones = getProductByCategory(21); // Fetch products under the Headphones category
          if(mysqli_num_rows($headphones) > 0) {
            while($item = mysqli_fetch_assoc($headphones)) {
              ?>
              <div class="col-md-2 mb-2">
                <a href="product-view.php?product=<?= $item['slug']; ?>">
                  <div class="card shadow">
                    <div class="card-body">
                      <img src="uploads/<?= $item['image']; ?>" alt="Product Image" class="w-100">
                      <h6 class="text-center"><?= $item['name']; ?></h6>    
                    </div>
                  </div>
                </a>
              </div>
              <?php
            }
          }
          ?>
        </div>

        <!-- Add more categories if needed -->
      </div>
    </div>
  </div>
</div>
<?php
$feedbacks = getAllFeedback(); // Function that fetches feedback from DB
?>

<div class="review-container">
    <h2>Customer Reviews</h2>
    <div class="review-slider">
        <?php foreach ($feedbacks as $index => $feedback) : ?>
            <div class="review-item <?= $index === 0 ? 'active' : '' ?>">
                <p class="stars"><?= str_repeat('★', getStars($feedback['experience'])) . str_repeat('☆', 5 - getStars($feedback['experience'])) ?></p>
                <p class="review-text"><?= $feedback['suggestions'] ?></p>
                <p class="review-name">- <?= $feedback['name'] ?></p>
            </div>
        <?php endforeach; ?>

        <div class="arrow left-arrow" onclick="prevReview()">❮</div>
        <div class="arrow right-arrow" onclick="nextReview()">❯</div>
    </div>
</div>


<?php
// Function to convert experience into stars
function getStars($experience) {
    $ratings = [
        "excellent" => 5,
        "good" => 4,
        "average" => 3,
        "poor" => 2,
        "very-poor" => 1
    ];
    return $ratings[strtolower($experience)] ?? 0;
}
?>

<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4>About Us</h4>
        <div class="underline"></div>
        <div class="container">
          <div class="rfooter">
          
            <div class="col-md-3 py-3 py-md-3 about">
            <a href="cart.php" style="color:#000;">
              <i class="fa-solid fa-cart-shopping fa-2x"></i> <!-- Increased icon size -->
              <h6>Shipping card<br>
                discount up 30% off</h6>
              <h6>On order over 2,000</h6>
            </div>
            </a>
            <div class="col-md-3 py-3 py-md-3 about">
            <a href="my-orders.php" style="color:#000;">
              <i class="fa-solid fa-rotate-left fa-2x"></i> <!-- Increased icon size -->
              <h6>Free Returns</h6>
              <h6>Within 7 days</h6>
            </div>
            </a>
            <div class="col-md-3 py-3 py-md-3 about">
            <a href="my-orders.php" style="color:#000;">
              <i class="fa-solid fa-truck fa-2x"></i> <!-- Increased icon size -->
              <h6>Fast Delivery</h6>
              <h6>World Wide</h6>
            </div>
            </a>
            <div class="col-md-3 py-3 py-md-3 about">
            
              <i class="fa-solid fa-thumbs-up fa-2x"></i> <!-- Increased icon size -->
              <h6>Big choice</h6>
              <h6>Of products</h6>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <div class="py-5 bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h5 class="text-white">Pappu Mobile Shop</h5>
          <div class="underline mb-2"></div>
          <a href="index.php" class="text-white"> <i class="fa fa-angle-right"></i>Home</a><br>
          <a href="about.php" class="text-white"> <i class="fa fa-angle-right"></i>About Us</a><br>
          <a href="cart.php" class="text-white"> <i class="fa fa-angle-right"></i>My Cart</a><br>
          <a href="categories.php" class="text-white"> <i class="fa fa-angle-right"></i>Our Collections</a><br>
          <a href="feedback.php" class="text-white"> <i class="fa fa-angle-right"></i>FeedBack</a>
          </div>
        <div class="col-md-3">
          <h5 class="text-white">Address</h5>
          <p class="text-white">
                #Goverment Polytechnic Road Sendurwafa <br>
                Ta: SAKOLI  Dis:Bhandara  <br>
                 pin:441802 <br>
              </p>
              <a href="tel:+918830014407" class="text-white"><i class="fa fa-phone"></i>+91 8830014407</a><br>
              <a href="mailto:pappusho@gmail.com" class="text-white"><i class="fa fa-envelope"></i>pappushopmobile@gmail.com</a>
        </div>
        <div class="col-md-3">
          <h5 class="text-white">Usefull Links Follow Us</h5>
          <div class="socail-links mt-3">
                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-snapchat"></i></a>
                <a href=""><i class="fa-brands fa-linkedin"></i></a>
          </div>
         
        </div>
        <div class="col-md-3">
          <h5 class="text-white">Google Map Link</h5>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d846.180581283652!2d80.01825136409946!3d21.088093764512504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a2b755e72416d7b%3A0xe3299e8df9c84cf4!2sPappu%20Mobile%20Centar!5e1!3m2!1sen!2sin!4v1739800577123!5m2!1sen!2sin"  width="150px"  height="150px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>
    
   <div class="py-2 bg-danger">
    <div class="text-center">
      <div class="mb-0 text-white">
        <p class="mb-0 text-white">All rights reserved, Copyright @ Hashraj Zode <?= date('Y') ?></p>
      </div>
    </div>
   </div>



   <script>
    let index = 0;
    function showReview(n) {
        let reviews = document.querySelectorAll('.review-item');
        reviews.forEach((review, i) => {
            review.classList.remove('active');
            if (i === n) review.classList.add('active');
        });
    }

    function nextReview() {
        index = (index + 1) % document.querySelectorAll('.review-item').length;
        showReview(index);
    }

    function prevReview() {
        index = (index - 1 + document.querySelectorAll('.review-item').length) % document.querySelectorAll('.review-item').length;
        showReview(index);
    }

    setInterval(nextReview, 4000); // Auto-slide every 4 seconds
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/67f0e1f3a7dfec190f0d8ae6/1io2f58g1';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

    <?php 
    include('includes/footer.php');
     ?>
