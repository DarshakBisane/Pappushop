<!DOCTYPE html>
<html lang="en">
<head>
    <title>Refund Form</title>
 
  <script src="return.js"></script>
</head>
<body>
  
    <?php  
        include('functions/userfunction.php');
        include('includes/header.php');
        include('authencticate.php');

                
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
    <br>
    <br>
    

    <div class="containerbox">
    <h2>RETURN PRODUCT</h2>
   
            <form class="form" action="functions/returndata.php" method="post">
                <input type="hidden" name="order_id" value="<?= $data['id'] ?>"> <div class="form-group">
                    <label for="customer-name">Name Of Customer</label>
                    <input type="text" id="customer-name" name="customername" value="<?= $data['name'] ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="order-date">Order Date</label>
                    <input type="text" id="order-date" name="orderdate" style="width: 100%;" value="<?= $data['created_at'] ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="reason">Reason for Refund</label>
                    <select id="reason" name="reason">
                        <option value="">Select a reason</option>
                        <option value="damaged">Damaged Product</option>
                        <option value="defective">Defective Product</option>
                        <option value="wrong">Wrong Product</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="total">Order Total Price</label>
                    <input type="text" id="total" name="price" value="<?= $data['total_price'] ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="refunded">Amount Refunded</label>
                    <input type="text" id="refunded" name="refunded_amount" value="<?= $data['total_price'] ?>">
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea id="address" name="address"><?= $data['address'] ?></textarea>
                </div>

                <div class="form-group">
                    <label for="contact">Contact No</label>
                    <input type="text" id="contact" name="contact" value="<?= $data['phone'] ?>" readonly>
                </div>

                <div class="btn-container">
                    <input type="reset" style="background-color: red;" class="submit">
                    <input type="submit" class="submit" name="returnbutton">
                </div>
            </form>
           
</div>

    <?php  include('includes/footer.php');  ?>

</body>
</html>


<style>
    /*  MOBILE  */
/*  MOBILE  */
/*  MOBILE  */


@media screen and (max-width:426px){
    body {

      
        background-size: 1440px;
        background-attachment: fixed;
        font-family: sans-serif;
        margin: 0;
        background-color: #f0f0f0; /* Light gray background */
    } 
    .containerbox {
        color: #fff;
        width: 75%;
        position: relative;
        max-width: 600%;
        margin: 20px auto;
        background-color: rgba(0, 0, 0,0.7) ;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 0px 50px rgba(0, 0, 0, 0.4);
    }
    .container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl{
        width: 80%;
    }
    
    
    .form-group {
        margin-bottom: 2%;
        width: 100%;
        font-size: medium;
    }
    label {
        display: block;
        margin-bottom: 5px;
    }
    input[type="text"],
    select,
    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    .btn-container {
        text-align: center;
    }
    button {
        border-radius:20%;
        padding: 10px 20px;
        background-color: #4CAF50; /* Green */
        color: white;
        border: none;
        
        cursor: pointer;
    }
    .submit{
        border: none;
        border-radius: 10px;
        background-color: green; /* Red */
        margin-right: 10px;
        width:40%;
        height: 29px;
        color: white;
       
        }
    .footer {
        text-align: center;
        margin-top: 20px;
        color: #777;
        font-size: 14px;
    } 
    .header {
        background-color: #333; 
        
        color: white;
        padding: 10px;
        text-align: center;
        
    }
    .header img { 
        max-height: 40px; 
        vertical-align: middle; 
        margin-right: 10px; 
    }
    .header h1 {
        display: inline-block; 
    }
    .nav {
        background-color: #f0f0f0;
        padding: 10px;
        text-align: center;
    }
    .nav a {
        margin: 0 15px; 
        text-decoration: none;
        color: #333; 
    }
}



/*  TABLET  */
/*  TABLET  */
/*  TABLET  */




@media screen and (min-width:426px) and (max-width:768px){
    body {

       
        background-size: 1440px;
        background-attachment: fixed;
        font-family: sans-serif;
        margin: 0;
        background-color: #f0f0f0; /* Light gray background */
    } 
    .containerbox{
        color: #fff;
        width: 60%;
        position: relative;
        max-width: 600%;
        margin: 20px auto;
        background-color: rgba(0, 0, 0,0.7);
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 0px 50px rgba(0, 0, 0, 0.4);
    }
    
    
    .form-group {
        margin-bottom: 2%;
        width: 100%;
        font-size: medium;
    }
    label {
        display: block;
        margin-bottom: 5px;
    }
    input[type="text"],
    select,
    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    .btn-container {
        text-align: center;
    }
    button {
        border-radius:20%;
        padding: 10px 20px;
        background-color: #4CAF50; /* Green */
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    .submit{
        border: none;
        border-radius: 10px;
        background-color: green; /* Red */
        margin-right: 10px;
        width:40%;
        height: 29px;
        color: white;
    }
    .footer {
        text-align: center;
        margin-top: 20px;
        color: #777;
        font-size: 14px;
    } 
    .header {
        background-color: #333; 
        
        color: white;
        padding: 10px;
        text-align: center;
        
    }
    .header img { 
        max-height: 40px; 
        vertical-align: middle; 
        margin-right: 10px; 
    }
    .header h1 {
        display: inline-block; 
    }
    .nav {
        background-color: #f0f0f0;
        padding: 10px;
        text-align: center;
    }
    .nav a {
        margin: 0 15px; 
        text-decoration: none;
        color: #333; 
    }
}




/*  LAPTOP  */
/*  LAPTOP  */
/*  LAPTOP  */




@media screen and (min-width:769px) {
    body {
      
        background-size: 1440px;
        background-attachment: fixed;
        font-family: sans-serif;
        margin: 0;
       
    } 
    .containerbox {
        color: #fff;
        width: 60%;
        position: relative; 
        max-width: 600%;
        margin: 20px auto;
        background-color: rgba(0, 0, 0, 0.7);
        padding: 20px;
        border-radius: 8px;
        box-shadow:0px 0px 50px rgba(0, 0, 0, 0.4);
    }
   
    .form-group {
        margin-bottom: 4%;
        width: 100%;
        font-size: medium;
    }
    label {
        display: block;
        margin-bottom: 5px;
    }
    .pimage{
       padding-right: 10px;
       padding-left: 10px;
        width: 40%;
        display:flex ;
        height: 130px;
    }
    input[type="text"],
    select,
    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    .btn-container {
        text-align: center;
    }
    
    button {
        border-radius:20%;
        padding: 10px 20px;
        background-color: #4CAF50; /* Green */
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    .submit{
        border: none;
        border-radius: 10px;
        background-color: green; /* Red */
        margin-right: 10px;
        width:20%;
        height: 35px;
        color: white;
       
    }
    .footer {
        text-align: center;
        margin-top: 20px;
        color: #777;
        font-size: 14px;
    } 
    .header {
        background-color: #333; 
        
        color: white;
        padding: 10px;
        text-align: center;
        
    }
    .header img { 
        max-height: 40px; 
        vertical-align: middle; 
        margin-right: 10px; 
    }
    .header h1 {
        display: inline-block; 
    }
    .nav {
        background-color: #f0f0f0;
        padding: 10px;
        text-align: center;
    }
    .nav a {
        margin: 0 15px; 
        text-decoration: none;
        color: #333; 
    }
}
</style>