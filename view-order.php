<?php

include('functions/userfunction.php');
include('includes/header.php');
include('authencticate.php');
include('config/dbcon.php'); // Include database connection file

if (isset($_GET['t'])) {
    $tracking_no = mysqli_real_escape_string($con, $_GET['t']); // Sanitize input

    $orderData = checkTrackingNoValid($tracking_no);
    if (mysqli_num_rows($orderData) == 0) { // Corrected check
        ?>
        <h4>Order Not Found</h4>
        <?php
        die();
    }
} else {
    ?>
    <h4>Something Went Wrong</h4>
    <?php
    die();
}

$data = mysqli_fetch_array($orderData);
?>

<link href="assets/css/style.css" rel="stylesheet">
<div class="py-3 bg-primary">
    <div class="container">
        <h6 class="text-white">
            <a href="index.php" class="text-white">HOME /</a>
            <a href="my-orders.php" class="text-white">My Orders/</a>
            <a href="view-order.php" class="text-white">View Orders</a>
        </h6>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="card card-body shadow">
            <div class="row ">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-primary">
                           <span class="text-white fs-4"> View Orders</span>
                            <a href="my-orders.php" class="btn btn-warning float-end"><i class="fa fa-reply"></i>  Back</a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>Delivery Details</h4>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12 md-2">
                                            <label class="fw-bold">Name</label>
                                            <div class="border p-1"><?= $data['name']; ?></div>
                                        </div>
                                        <div class="col-md-12 md-2">
                                            <label class="fw-bold">Email</label>
                                            <div class="border p-1"><?= $data['email']; ?></div>
                                        </div>
                                        <div class="col-md-12 md-2">
                                            <label class="fw-bold">Phone</label>
                                            <div class="border p-1"><?= $data['phone']; ?></div>
                                        </div>
                                        <div class="col-md-12 md-2">
                                            <label class="fw-bold">Address</label>
                                            <div class="border p-1"><?= $data['address']; ?></div>
                                        </div>
                                        <div class="col-md-12 md-2">
                                            <label class="fw-bold">PinCode</label>
                                            <div class="border p-1"><?= $data['pincode']; ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4>Order Details</h4>
                                    <hr>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $userId = $_SESSION['auth_user']['user_id'];

                                            $order_query = "SELECT o.id as oid, o.tracking_no, o.user_id, oi.*, oi.qty as orderqty , p.* FROM orders o, order_items oi, products p WHERE o.user_id ='$userId' AND oi.order_id = o.id AND p.id = oi.prod_id AND o.tracking_no = '$tracking_no'";

                                            $order_query_run = mysqli_query($con, $order_query);

                                            if (!$order_query_run) {
                                                die("Query failed: " . mysqli_error($con)); // Added error handling
                                            }

                                            if (mysqli_num_rows($order_query_run) > 0) {
                                                foreach ($order_query_run as $item) {
                                                    ?>
                                                    <tr>
                                                        <td class="align-middle">
                                                            <img src="uploads/<?= $item['image']; ?>" width="50px" height="50px" alt="<?= $item['name']; ?>">

                                                            <?= $item['name']; ?>
                                                        </td>
                                                        <td class="align-middle"><?= $item['price']; ?></td>
                                                        <td class="align-middle"><?= $item['orderqty']; ?></td>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>

                                   <hr>
                                   <h5>Total Price : <span class="float-end fw-bold"><?= $data['total_price']; ?></span></h5>
                                   
                                <label class="fw-bold">Payment Mode :</label>
                                   <div class="border p-1 mb-3">
                                    <?= $data['payment_mode']; ?>
                                   </div>
                                            
                                   <label class="fw-bold">Status :</label>
                                   <div class="border p-1 mb-3">
                                    <?php

                                    if($data['status'] == 0)
                                    {
                                        echo"Under Process";
                                    }else if($data['status'] == 1)
                                    {
                                        echo" Completed ";
                                    }else if($data['status'] == 2)
                                    {
                                        echo" Cancelled ";
                                    }
                                     
                                     ?>
                                   </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
?>