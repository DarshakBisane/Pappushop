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
        <a href="checkout.php" class="text-white">
         CHECKOUT
        </a>
    </h6>
  </div>
</div>


<div class="py-5">
  <div class="container">
    <div class="card">
        <form action="functions\placeorder.php" method="POST">
        <div class="card-body">
            <div class="row ">
                <div class="col-md-7">
                <h5>Basic Details</h5>
                <hr>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Name</label>
                        <input type="text"  name="name" placeholder="full name !" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">E-mail</label>
                        <input type="email" name="email" placeholder="E-mail !" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Phone number</label>
                        <input type="text" name="phone" placeholder="Phone number !" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Pin code</label>
                        <input type="text" name="pincode" placeholder="Pin code !" class="form-control" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="fw-bold">Address</label>
                        <textarea name="address" class="form-control" rows="5" required></textarea>
                    </div>
                </div>
            </div>
                <div class="col-md-5">
                    <h5>Order Details</h5>
                    <hr>
                    <?php $items =  getcartItems();
                    $total_price =0;
                        foreach ($items as $citem) 
                            {
                    ?>
                    <div class="mb-1 border">         
                        <div class="row align-items-center">
                            <div class="col-md-2">
                                <img src="uploads/<?= $citem['image'] ?>" alt="Image" width ="60px" >
                            </div>
                            <div class="col-md-3">
                                <label><?= $citem['name'] ?></label>
                            </div>
                            <div class="col-md-3">
                                <label><?= $citem['selling_price'] ?></label>
                            </div>
                            <div class="col-md-3">
                                <label>x<?= $citem['prod_qty'] ?></label>
                            </div>
                        </div>
                    </div>
                    <?php
                       
                        $total_price+=$citem['selling_price'] *$citem['prod_qty'] ;
                    }
                    ?>
                    <hr>
                    <h5>Total Price : <span class="float-end fw-bold"><?=$total_price ?></span></h5>
                    <div class="">
                        <input type="hidden" name="payment_mode" value="COD">
                        <button type="submit" name="placeOrderBtn" class="btn btn-primary">Buy Now</button>
                    </div>
                </div>   
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
   

    <?php
     include('includes/footer.php');
    ?>
