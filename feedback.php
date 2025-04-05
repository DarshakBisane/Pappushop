<?php 
session_start();
if(isset($_SESSION['message']))
{
    echo "<div class='alert alert-success'>".$_SESSION['message']."</div>";
    unset($_SESSION['message']); // Clear the message after displaying
}
include('includes/header.php');



?>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-size: 16px;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        textarea,
        select {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ddd;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
        }

        .rating input {
            display: none;
        }

        .rating label {
            font-size: 24px;
            color: #ddd;
            cursor: pointer;
        }

        .rating input:checked~label {
            color: #f39c12;
        }

        .submit-btn {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #5cb85c;
            color: #fff;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #4cae4c;
        }

        .form-group .comments {
            height: 100px;
        }

        @media screen and (max-width: 768px) {
            .container {
                padding: 10px;
            }

            .form-container {
                padding: 20px;
            }
        }

    </style>
 
    <div class="container">
        <h1>Customer Feedback Form</h1>
        <div class="form-container">
           <form action="feedbackdatabase.php" method="POST">
            <!-- Name -->
       <div class="form-group">
       <label for="name">Your Name</label>
        <input type="text" name="name" id="name" required>
      </div>

          <!-- Email -->
        <div class="form-group">
           <label for="email">Your Email</label>
           <input type="email" name="email" id="email" required>
        </div>

                <!-- Overall Experience -->
                <div class="form-group">
                    <label for="experience">1. Overall Shopping Experience</label>
                    <select name="experience" id="experience" required>
                        <option value="excellent">Excellent</option>
                        <option value="good">Good</option>
                        <option value="average">Average</option>
                        <option value="poor">Poor</option>
                        <option value="very-poor">Very Poor</option>
                    </select>
                </div>

                <!-- Product Selection -->
                <div class="form-group">
                    <label for="product-selection">2. Did you find the product you were looking for?</label>
                    <select name="product-selection" id="product-selection" required>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                        <option value="somewhat">Somewhat</option>
                    </select>
                </div>

                <!-- Mobile Repair Feedback -->
                <div class="form-group">
                    <label for="mobile-repair">3. If you used mobile repair services, rate the process:</label>
                    <div class="rating">
                        <input type="radio" id="repair-excellent" name="mobile-repair" value="excellent" required>
                        <label for="repair-excellent">★</label>
                        <input type="radio" id="repair-good" name="mobile-repair" value="good">
                        <label for="repair-good">★</label>
                        <input type="radio" id="repair-average" name="mobile-repair" value="average">
                        <label for="repair-average">★</label>
                        <input type="radio" id="repair-poor" name="mobile-repair" value="poor">
                        <label for="repair-poor">★</label>
                    </div>
                </div>

                <!-- Product Quality -->
                <div class="form-group">
                    <label for="product-quality">4. Rate the product quality (e.g., mobile, cover, smartwatch, etc.)</label>
                    <div class="rating">
                        <input type="radio" id="quality-excellent" name="product-quality" value="excellent" required>
                        <label for="quality-excellent">★</label>
                        <input type="radio" id="quality-good" name="product-quality" value="good">
                        <label for="quality-good">★</label>
                        <input type="radio" id="quality-average" name="product-quality" value="average">
                        <label for="quality-average">★</label>
                        <input type="radio" id="quality-poor" name="product-quality" value="poor">
                        <label for="quality-poor">★</label>
                    </div>
                </div>

                <!-- Payment Method -->
                <div class="form-group">
                    <label for="payment-method">5. Payment Method Used</label>
                    <select name="payment-method" id="payment-method" required>
                        <option value="credit-card">Credit/Debit Card</option>
                        <option value="paypal">PayPal</option>
                        <option value="upi">UPI</option>
                        <option value="Cash on Delivery">Cash on Delivery</option>
                    </select>
                </div>

                <!-- Return Process -->
                <div class="form-group">
                    <label for="return-process">6. Was the return process easy and straightforward?</label>
                    <select name="return-process" id="return-process" required>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                        <option value="somewhat">Somewhat</option>
                    </select>
                </div>

                <!-- Customer Service -->
                <div class="form-group">
                    <label for="customer-service">7. Rate the customer service you received</label>
                    <div class="rating">
                        <input type="radio" id="service-excellent" name="customer-service" value="excellent" required>
                        <label for="service-excellent">★</label>
                        <input type="radio" id="service-good" name="customer-service" value="good">
                        <label for="service-good">★</label>
                        <input type="radio" id="service-average" name="customer-service" value="average">
                        <label for="service-average">★</label>
                        <input type="radio" id="service-poor" name="customer-service" value="poor">
                        <label for="service-poor">★</label>
                    </div>
                </div>

                <!-- Suggestions -->
                <div class="form-group">
                    <label for="suggestions">8. Any Suggestions for Improvement?</label>
                    <textarea name="suggestions" id="suggestions" class="comments" placeholder="Your suggestions here..."></textarea>
                </div>

                <!-- Submit Button -->
                <button type="submit" name="submit_feedback_btn" class="submit-btn">Submit Feedback</button>
            </form>
        </div>
    </div>

    <?php
     include('includes/footer.php');
     ?>


