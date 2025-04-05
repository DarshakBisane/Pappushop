<!DOCTYPE html>
<head>
    <title>
     Repair Page   
    </title>
    <script src="repair.js"></script>
    <link rel="stylesheet" href="rpage.css">
</head>
<body>
<?php
include('includes/header.php');
?>



<main>
        
        <div class="form-container">
        <h1>REPAIR PRODUCT</h1>
            <form id="repairForm" action="functions\repairdata.php" method="POST" enctype="multipart/form-data">
               

                <label for="productDefect">Select Defect:</label>
                <select id="productDefect" name="productDefect">
                    <option value="screen">Screen Damage</option>
                    <option value="battery">Battery Issue</option>
                    <option value="software">Software Problem</option>
                    </select><br><br>

                <label for="customerName">Customer Name:</label>
                <input type="text" id="customerName" name="customerName" required><br><br>

                <label for="contactNo">Contact No:</label>
                <input type="tel" id="contactNo" name="contactNo" required><br><br>

                <label for="productImage">Product Image:</label>
                <input type="file" id="productImage" name="productImage"><br><br>

                <label for="defectDescription">Defect Description:</label>
                <textarea id="defectDescription" name="defectDescription" rows="3" required></textarea><br><br>

                <label for="address">Address:</label>
                <textarea id="address" name="address" rows="3" required></textarea><br><br>

                <div class="btn-container">
            <input type="reset" style="background-color: red;" class="submit">
            <input type="submit" class="submit" name="repairbutton">
        </div>
            </form>
        </div>
    </main>

    <?php  include('includes/footer.php');  ?>

</body>

<style>
    @media screen and (max-width:426px){
    body {
        font-family: sans-serif;
        margin: 0;
        padding: 0;
    }
    
    main {
        padding: 20px;
    }
    
    .form-container {
        width: 95%;
        position: relative;
        max-width: 600%;
        margin: 20px auto;
        background-color: #fff;
        border: 1px solid #ccc;
        padding: 20px;
        color: #fff;
        border-radius:8px;
        background-color:rgba(0, 0, 0, 0.7);
    }
    
    label {
        display: block;
        margin-bottom: 5px;
    }
    
    input[type="text"],
    input[type="tel"],
    input[type="date"],
    select {
        width: 100%;
        padding: 5px;
        margin-bottom: 10px;
        box-sizing: border-box;
        height: 30px;
    }
    textarea{
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }
    .btn-container{
        display: flex;
        align-items: center;
    }
    button {
        padding: 10px 20px;
        margin: 0 5px;
    }
    .submit{
        border: none;
        border-radius: 10px;
        background-color: green; /* Red */
        margin-right: 5px;
        margin-left: 5px;
        width: 50%;
        height: 29px;
        color: white;
    }
    
}

@media screen and (min-width:426px) and (max-width:768px){
    body {
        font-family: sans-serif;
        margin: 0;
        padding: 0;
    }
    nav {
        background-color: #ddd;
        padding: 10px;
    }
    nav button {
        margin: 0 5px;
        padding: 8px 16px;
    }
    
    main {
        padding: 20px;
    }
    
    .form-container {
        border: 1px solid #ccc;
        padding: 20px;
        position: relative;
        left: 8%;
        width: 85%;
        color: #fff;
        border-radius:8px;
        background-color:rgba(0, 0, 0, 0.7);
    }
    
    label {
        display: block;
        margin-bottom: 5px;
    }
    
    input[type="text"],
    input[type="tel"],
    input[type="date"],
    select,
    textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }
    
    button {
        padding: 10px 20px;
        margin: 0 5px;
    }
    .submit{
        position: relative;
        border: none;
        border-radius: 10px;
        background-color: green; /* Red */
        margin-right: 10px;
        width:20%;
        left: 27%;
        height: 34px;
        color: white;
    }
    .h1, h1{
        margin-left: 10%;
        margin-bottom: 20px;
    }
    
}

@media screen and (min-width:769px) {
    body {
        font-family: sans-serif;
        margin: 0;
        padding: 0;
    }
    nav {
        background-color: #ddd;
        padding: 10px;
    }
    nav button {
        margin: 0 5px;
        padding: 8px 16px;
    }
    
    main {
        padding: 20px;
    }
    
    .form-container {
     
        border: 1px solid #ccc;
        padding: 20px;
        position: relative;
        left: 20%;
        width: 60%;
        color: #fff;
        border-radius:8px;
        background-color:rgba(0, 0, 0, 0.7);
    }
    
    label {
        display: block;
        margin-bottom: 5px;
    }
    
    input[type="text"],
    input[type="tel"],
    input[type="date"],
    select,
    textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }
    
    button {
        padding: 10px 20px;
        margin: 0 5px;
    }
    .submit {
        position: relative;
        left: 27%;
        border: none;
        border-radius: 10px;
        background-color: green;
        margin-right: 40px;
        width: 20%;
        height: 40px;
        color: white;
    }
    .h1, h1{
        margin-left: 10%;
        margin-bottom: 30px;
    }
}
</style>
</html>