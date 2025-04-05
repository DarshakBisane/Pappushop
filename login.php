<?php 
session_start();
include('includes/header.php');
if(isset($_SESSION['auth']))
{
  $_SESSION['message'] = " you are already logged in ";
  header('Location: index.php');
  exit();
}
?>


    
    

<div class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <?php
         if (isset($_SESSION['message'])) { ?>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Hey!</strong> <?= $_SESSION['message']; ?>.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <?php 
          unset($_SESSION['message']);
        }
        ?>
     <div class="card-body"> 
           <div class="Card-header">
              <h4>Login form</h4>
           </div>
     <br>
     
      <form action="functions/authcode.php" method="POST" >
          <div class="mb-3">
           <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" placeholder="Enter your email " id="exampleInputEmail1" aria-describedby="emailHelp">
    
          </div>
         <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Password</label>
         <input type="password" name="password" class="form-control" placeholder="Enter  password " id="exampleInputPassword1">
          </div>
  
         <button type="submit" name="login_btn" class="btn btn-primary">Login</button>
         
         </form>

      </div>   
    
      </div>
      </div>
  </div>
</div>
</div>

<?php  include('includes/footer.php');  ?>

<style>
  .card-body{
box-shadow:0px 0px 50px rgba(0,0,0,0.7);
background-color:rgba(0,0,0,0.7);
color:#fff;
border-radius:15px;
margin-top:30px
  }
  .mb-3{
    margin-bottom:20px !important;
    
  }
  .card-header{
    font-weight:bold;
  }
</style>