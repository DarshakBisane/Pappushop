<?php
session_start();
include('config/dbcon.php');

if (!isset($_SESSION['auth'])) {
    header('Location: login.php');
    exit();
}

$user_id = $_SESSION['auth_user']['user_id'];
$query = "SELECT * FROM users WHERE id='$user_id'";
$result = mysqli_query($con, $query);
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .profile-container {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .profile-image {
            text-align: center;
        }
        .profile-image img {
            border-radius: 50%;
            width: 120px;
            height: 120px;
            object-fit: cover;
            border: 4px solid #007bff;
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            width: 100%;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .nav-link {
            color: white !important;
        }
    </style>
</head>
<body>
  <!-- Alertify Ja -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css"/>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">Pappu Mobile Shop</a>
        <div id="navbarNav" class="d-flex align-items-center">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>


    <!-- Profile Section -->
    <div class="container">
        <div class="profile-container">
        <?php
        if (isset($_SESSION['message']) && !empty($_SESSION['message'])) { ?>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Hey!</strong> <?= $_SESSION['message']; ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <?php 
          unset($_SESSION['message']); // Clear message after displaying
        }
        ?>
            <h3 class="text-center">User Profile</h3>
            <div class="profile-image">
                <?php if ($user['profile_image']): ?>
                    <img src="<?= $user['profile_image']; ?>" alt="Profile Image">
                <?php else: ?>
                    <img src="default-avatar.png" alt="Default Profile Image">
                <?php endif; ?>
            </div>

            <form action="update_profile.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name"><i class="bi bi-person-fill"></i> Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="email"><i class="bi bi-envelope-fill"></i> Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="phone"><i class="bi bi-phone-fill"></i> Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="<?= $user['phone']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="password"><i class="bi bi-lock-fill"></i> New Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter new password">
                </div>
                <div class="form-group">
                    <label for="profile_image"><i class="bi bi-image"></i> Profile Image</label>
                    <input type="file" class="form-control" id="profile_image" name="profile_image">
                </div>
                <button type="submit" class="btn btn-primary"><i class="bi bi-save-fill"></i> Update Profile</button>
            </form>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    
  <!-- ALERTIFY JS -->
  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>

  <script>
    alertify.set('notifier','position','top-right');
   <?php
   if(isset($_SESSION['message']))
   {
    
    ?>
    
    alertify.success('<?= $_SESSION['message']; ?>');
    <?php
    unset($_SESSION['message']);
   }

   ?>
  </script>


</body>
</html>