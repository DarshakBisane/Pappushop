<?php 

include('functions/userfunction.php');
include('includes/header.php');
include('authencticate.php');

?>

<link href="assets/css/style.css" rel="stylesheet" >
<div class="py-3 bg-primary">
  <div class="container">
    <h6 class="text-white" >
        <a href="index.php" class="text-white">
        HOME /
        </a>
        <a href="cart.php" class="text-white">
         Cart
        </a>
    </h6>
  </div>
</div>


<div class="py-5">
  <div class="container">
    <div class="card card-body  shadow">
      <div class="row">
        <div class="col-md-12 cartcontainer">
          <div class="row align-items-center">
              <div class="col-md-5 prod">
                <h6>Product</h6>
              </div>
              <div class="col-md-2 price">
                <h6>Price</h6>
              </div>
              <div class="col-md-3 quantity">
                <h6>Quantity</h6>
              </div>
              <div class="col-md-2 remove">
                <h6>Remove</h6>
              </div>
          </div>
          <div id="mycarts">
              <?php $items =  getcartItems();

              if(mysqli_num_rows($items) > 0){
                foreach ($items as $citem) 
                {
              ?>
              <div class="card product_data shadow-sm mb-3">         
                <div class="row align-items-center">
                  <div class="col-md-5 prod">
                    <div class="prodimage">
                      <div class="col-md-3">
                    <img src="uploads/<?= $citem['image'] ?>" alt="Image" width ="70px" >
                    </div>
                    <div>
                    <h6 class="text"><?= $citem['name'] ?></h6>
                    </div>
                    </div>
                  </div>
                 
                  <div class="col-md-2 price">
                    <h6 class="text">₹<?= $citem['selling_price'] ?></h6>
                  </div>
                  <div class="col-md-3 quantity">
                    <input type="hidden" class="prodId" value="<?= $citem['prod_id'] ?>">
                    <div class="input-group mb-3" style="width:130px">
                      <button class="input-group-text decrement-btn updateQty">-</button>
                      <input type="text" class="form-control text-center input-qty bg-white" id="input-qty" value="<?= $citem['prod_qty'] ?>" disabled >
                      <button class="input-group-text increment-btn updateQty">+</button>
                    </div>
                  </div>
                  <div class="col-md-2 removebutton">
                    <button class="btn btn-danger btn-sm deleteItem " value="<?= $citem['cid'] ?>">
                    <i class="fa fa-trash me-2"></i>Remove</button>
                  </div>
                </div>
              </div>
              <?php
                }
              ?>
          </div>
          <div class="float-end">
            <a href="checkout.php" class="btn btn-outline-primary">Proceed to Checkout</a>
          </div>
          <?php
            }
            else{
          ?>
          <h4 class="py-3">
            Your Cart Is Empty
          </h4>
          <?php
            }
          ?>  
        </div>
      </div>
    </div>
  </div>
</div>
   

    <?php
     include('includes/footer.php');
    ?>

<style>

  @media screen and (max-width:426px) {
 
 .prod{
  width: 80px;
  padding:0px;
  font-size: small;
}

#mycarts{
  width: 290px;
  margin-left: -14px;
}
.prod img{
  margin-left: 11px;

  width: 30px;
  padding:0px;
} 
.price{
  padding:0px;
  font-size: small;
  width: 65px;
}
.quantity{
  padding:0px;
  font-size: small;
  width: 65px;
}
.remove{
  padding:0px;
  width: 70px;
  font-size: small;
} 
.text{
font-size: x-small;
}
.removebutton{
  width: 50px;
}
.deleteItem{
  height: 25px;
}
.input-group{
 position: relative;
 left:-10px;
 top: 8px;

}
.input-group-text{
  padding:0px !important;
  padding-left: 2px !important;
  width:14px !important;
  height: 25px;
}
.input-qty{
  width:20px !important;
  padding:0px !important;
  height: 25px;
  flex: 0.1 0 auto !important;
}
} 
.prodimage{
  display: flex;
  flex: nowrap;
  align-items: center;
}

</style>