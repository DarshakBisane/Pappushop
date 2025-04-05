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
        <a href="my-orders.php" class="text-white">
         My Orders
        </a>
    </h6>
  </div>
</div>


<div class="py-5">
  <div class="container">
    <div class="card card-body  shadow">
      <div class="row ">
        <div class="col-md-12">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Tracking No</th>
                <th>Price</th>
                <th>Date</th>
                <th>View</th>
                <th>Return</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $orders = getorders();

                if(mysqli_num_rows($orders) > 0)
                {
                    foreach ($orders as $item) {
              ?>
                <tr>
                  <td> <?= $item ['id'] ?>          </td>
                  <td> <?= $item ['tracking_no'] ?> </td>
                  <td> <?= $item ['total_price'] ?>       </td>
                  <td> <?= $item ['created_at'] ?>  </td>
                  <td><a href="view-order.php?t=<?= $item ['tracking_no'] ?>" class="btn btn-primary">View</Details></a></td>
                  <td><a href="returnpage.php?t=<?= $item ['tracking_no'] ?>" class="btn btn-danger">Return</Details></a></td>
                </tr>
              <?php
                    }
                }else{
              ?>
                <tr>
                  <td colspan="5"> No Orders Yet </td>
                </tr>
              <?php
                }
              ?>
             
            </tbody>
          </table>
           
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
    .table{
      font-size:10px;
    }
    .btn{
      width:40px;
      height: 17px;
      font-size: 8px;
      padding:2px !important;
      line-height: 12px;
    
    }
  }

</style>