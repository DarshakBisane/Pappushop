<?php
include('functions/userfunction.php');
include('includes/header.php');

// Fetch active products using the correct function
$product_data = getAllActive("products");  // Changed function name to getAllActive()

$products = [];
while ($product = mysqli_fetch_assoc($product_data)) {
    $products[] = $product; // Store the products in an array
}

// Encode the PHP products array into JSON format to pass to JavaScript
$products_json = json_encode($products);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <title>Product Searching</title>
    <style>
        /* Add background color and text styling */
        body {
            background-color: #f4f4f9; /* Light background color */
            font-family: 'Arial', sans-serif;
        }

        h2 {
            font-size: 2.5rem;
            color: #333;
            font-weight: 700;
        }

        /* Styling for the search input field */
        #myinput {
            border-radius: 50px; /* Rounded corners */
            padding-left: 20px;
            font-size: 1rem;
            width: 30%;
            margin-bottom: 20px;
        }

        /* Style for "Not Found" message */
        #para {
            font-size: 1.2rem;
            font-weight: bold;
        }

        /* Styling for product cards */
        .notfound {
            background-color: #fff; /* White background for product cards */
            border-radius: 15px; /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Light shadow */
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out; /* Smooth hover effect */
            overflow: hidden;
        }

        /* Hover effect for product cards */
        .notfound:hover {
            transform: translateY(-5px); /* Lift effect */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Stronger shadow on hover */
        }

        /* Product image style */
        .notfound img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Make sure the image covers the area */
            transition: transform 0.3s ease-in-out;
        }

        /* Hover effect for product images */
        .notfound:hover img {
            transform: scale(1.05); /* Zoom in effect */
        }

        /* Text styling inside product cards */
        .notfound h4 {
            font-size: 1.2rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
        }

        .notfound p {
            font-size: 1rem;
            color: #555;
        }

        /* Styling for the 'Read More' button */
        .notfound a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px;
            background-color: #007bff; /* Primary blue */
            color: #fff;
            text-align: center;
            text-decoration: none;
            font-weight: 600;
            border-radius: 5px;
            width: 100%;
        }

        .notfound a:hover {
            background-color: #0056b3; /* Darker blue on hover */
            text-decoration: none;
        }

        /* Responsiveness for the grid layout */
        @media (max-width: 576px) {
            .product-col {
                flex: 0 0 100%; /* Full width on mobile */
                max-width: 100%;
            }
        }

        @media (min-width: 577px) and (max-width: 768px) {
            .product-col {
                flex: 0 0 48%; /* 2 columns for tablets */
                max-width: 48%;
            }
        }

        @media (min-width: 769px) {
            .product-col {
                flex: 0 0 30%; /* 3 columns for laptops/desktops */
                max-width: 30%;
            }
        }

        /* Add spacing for product row */
        .row {
            margin-left: 0;
            margin-right: 0;
        }

    </style>
</head>
<body>

    <h2 class="text-center mt-2">Product Searching</h2>

    <input type="text" class="form-control mt-3 mx-auto" id="myinput" placeholder="Live searching...." style="width:30%;">

    <div class="container mb-5">
        <h3 class="text-danger mt-5 text-center" id="para" style="display: none;">Not Found</h3>
        <div class="row mt-3" id="notfound">
            <!-- Product results will appear here -->
        </div>
    </div>

    <script>
        // Retrieve the products array from PHP
        const products = <?php echo $products_json; ?>;

        // Function to display products in the gallery
        function showProducts(filteredProducts) {
            document.getElementById("notfound").innerHTML = '';
            filteredProducts.forEach(product => {
                document.getElementById("notfound").innerHTML += `
                    <div class="col-md-4 mt-3 product-col">
                        <div class="notfound p-3">
                            <h4 class="text-capitalize text-center">${product.name}</h4>
                            <img src="uploads/${product.image}" class="product-image" />
                            <p class="mt-2">${product.small_description}</p>
                            <a href="product-views.php?slug=${product.slug}" class="btn btn-primary w-100 mx-auto">Read More</a> <!-- Changed button to a link -->
                        </div>
                    </div>
                `;
            });
        }

        // Show all products initially
        showProducts(products);

        // Live search functionality
        document.getElementById("myinput").addEventListener("keyup", function() {
            let query = this.value.toLowerCase(); // Get the search query and convert it to lowercase
            let filteredProducts = products.filter(product => 
                product.name.toLowerCase().includes(query) || 
                product.small_description.toLowerCase().includes(query)
            );

            if (filteredProducts.length > 0) {
                showProducts(filteredProducts);
                document.getElementById("para").style.display = 'none'; // Hide "Not Found"
            } else {
                document.getElementById("para").style.display = 'block'; // Show "Not Found"
                document.getElementById("notfound").innerHTML = ''; // Clear results
            }
        });
    </script>

</body>
</html>

<?php include('includes/footer.php'); ?>
