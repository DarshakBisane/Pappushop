<?php 
include('functions/userfunction.php');
include('includes/header.php');

?>

<style>
@media screen and (max-width:426px) {
 .card shadow{
  width:100px;
  height: 130px !important; 
}
  .card-body{
    width:100px !important;
    height: 130px !important; 
    padding-left: 10px;
    padding-top: 5px;
  }
  .card-body img{

    width: 70px !important; 
    height:70px;
  }
  .category{
    width: 105px !important;
    height: 130px !important;
    padding-left: 5px;
    padding-right: 5px;
  }
  .text-center{
    font-size: 14px !important;
  }
}


@media screen and (min-width:426px) and (max-width:769px) {
      
  .card-body{
    height: 230px !important; 
  }
  .card-body img{
    margin-left: 3px;
    width: 120px !important; 
    height:120px;
  }
     
}
    
@media screen and (min-width:770px) {

  .card-body{
    height: 350px !important; 
  }
  .card-body img{
  
    width: 100% !important; 
    height:220px;
  
  }
}
      
      
</style>

<div class="py-3 bg-primary">
  <div class="container">
    <h6 class="text-white" >HOME / Collections</h6>
  </div>
</div>

<link href="assets/css/style.css" rel="stylesheet" >
<div class="py-3">
  <div class="container">
    <div class="row ">
      <div class="col-md-12">
                    <h1>Our Collections </h1>
                    <hr> 
                    <div class="row"> 
                                     
                    <?php
                        $categories = getAllActive("categories");

                        if(mysqli_num_rows($categories) > 0)
                        {
                            foreach($categories as $item)
                            {
                              ?>
                              <div class="col-md-3 mb-2 category">
                                <a href="products.php?category=<?= $item['slug']; ?>">
                                <div class="card shadow">
                                  <div class="card-body">
                                    <img src="uploads/<?= $item['image']; ?>" alt="Category Image" class="w-100" ><br><br>
                                   <h5 class="text-center"><?= $item['name']; ?></h5>
                                  </div>
                                </div>
                                </a>
                              </div>
                            
                              <?php
                            }
                        }
                        else
                        {
                          echo "No data available";
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
