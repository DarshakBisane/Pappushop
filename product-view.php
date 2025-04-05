<?php 
include('functions/userfunction.php');
include('includes/header.php');

if(isset($_GET['product']))
{
  $product_slug = $_GET['product'];
  $product_data = getslugActive("products",$product_slug);
  $product = mysqli_fetch_array($product_data);

   if($product)
   {
    ?>
    
<link href="assets/css/style.css" rel="stylesheet" >
<div class="py-3 bg-primary">
  <div class="container">
    <h6 class="text-white" >
    <a class="text-white" href="index.php">
        HOME /
        </a>
        <a class="text-white" href="categories.php">
         Collections / 
         </a>
         <?= $product['name']; ?>
        </h6>
  </div>
</div>
 
   <div class="bg-light py-4">
     <div class="container product_data mt-3">
        <div class="row">
            <div class="col-md-4 prodimage">
                <div class="shadow">
                <img src="uploads/<?= $product['image']; ?>" alt="Product img" class="w-100" >
                </div>      
            </div>
            <div class="col-md-8 proddetails">
                <h4 class="fw-bold"><?= $product['name']; ?>
                <span  class="float-end text-danger"><?php if($product['trending']){echo "Trending"; } ?></span>
            
            </h4>
                <hr>
                <h6 class="smalldescripction"><?= $product['small_description']; ?></h6>
                <div class="row">
                    <div class="col-md-6 price">
                        <h5>Rs <span class="text-success fw-bold"><?= $product['selling_price']; ?></span></h5>
                    </div>
                    <div class="col-md-6 price">
                        <h5>Rs <s class="text-danger"><?= $product['original_price']; ?></s></h5>
                    </div>       
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                      <div class="input-group mb-3" style="width:130px">
                    <button class="input-group-text decrement-btn">-</button>
                     <input type="text" class="form-control text-center input-qty bg-white" value="1" disabled >
                    <button class="input-group-text increment-btn">+</button>
                   </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 buttons">
                        <button class="btn btn-primary px-4 addToCartBtn" value="<?= $product['id']; ?>"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</button>
                    </div>
                    <div class="col-md-3 buttons">
                        <button class="btn btn-danger px-4 addToCartBtn" value="<?= $product['id']; ?>"><i class="fa fa-buynow me-2"></i>Buy Now</button>
                    </div>
                </div>

                <hr>

                <h6>Product Description:</h6>
                <p class="description"><?= $product['description']; ?></p>
                <p class="description"><?= $product['meta_description']; ?></p>
                <p class="description"><?= $product['meta_keywords']; ?></p>
                
            </div>
        </div>
     </div>
     </div>
     <?php

   }
   else
   {
    echo " Product Not Found";
   }
}
else
{
  echo "Something went wrong";

}


include('includes/footer.php'); ?>

<style>
    @media screen and (min-width:769px) {
.container {
  display: flex; 
  max-width: 1200px; 
  margin: 0 auto; 
  
}




/* The magic for the sticky effect */

    }
    @media screen and (min-width:426px) and (max-width:769px) {
.container {
  display: flex; 
  max-width: 769px; 
  margin: 0 auto; 
  
}

.prodimage img {
  display: block; 
  width: 100%; 
  height: auto;
}

.proddetails {
  flex-grow: 1; 
}

/* The magic for the sticky effect */
.prodimage {
  position: sticky;
  top: 100px; 
  height: fit-content;
}
    }
    @media screen and (max-width:426px) {
.container {
  display: flex; 
  max-width: 425px; 
  margin: 0 auto; 
}
.smalldescripction{
    font-size: small;
}
.price{
    width:150px;
}
.prodimage img {
  display: block; 
  width: 100px !important; 
  height: auto;
}
.buttons{
   width: 150px ;
}
.btn{
  font-size: 12px ;
}
.proddetails {
  flex-grow: 1; 
  width: 70%;
}
.description{
    font-size: 12px;
}
.input-group-text{
  padding:0px !important;
  padding-left: 4px !important;
  width:18px !important;
  height: 25px;
}
.input-qty{
  width:30px !important;
  height: 25px;
  flex: 0.1 0 auto !important;
}

/* The magic for the sticky effect */
.prodimage {
  position: sticky;
  top: 100px; 
  height: fit-content;
  width:100px;
}
    }
</style>
