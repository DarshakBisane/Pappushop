
<?php

include('functions/userfunction.php');
include('config/dbcon.php');
include('authencticate.php');



if(isset($_SESSION['auth']))
{
    if (isset($_POST['submit_feedback_btn'])) {
        // Retrieve form data
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $experience = $_POST['experience'];
        $product_selection = $_POST['product-selection'];
        $mobile_repair = $_POST['mobile-repair'];
        $product_quality = $_POST['product-quality'];
        $payment_method = $_POST['payment-method'];
        $return_process = $_POST['return-process'];
        $customer_service = $_POST['customer-service'];
        $suggestions = $_POST['suggestions'];
    
        // Insert data into the database
        $insert_query = "INSERT INTO feedback ( name, email,experience, product_selection, mobile_repair, product_quality, payment_method, return_process, customer_service, suggestions)
                VALUES ('$name', '$email','$experience', '$product_selection', '$mobile_repair', '$product_quality', '$payment_method', '$return_process', '$customer_service', '$suggestions')";
    
        $insert_query_run = mysqli_query($con, $insert_query);
        if ($insert_query_run) {
            
            $_SESSION['message'] = "Feedback submitted successfully!";
          
             header('Location: feedback.php');
        } 
         else {
            echo "Error: " . $insert_query . "<br>" . $con->error;
        }
    }
}
else
{
   echo 401;
}

?>
