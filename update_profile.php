<?php
session_start();
include('config/dbcon.php');

if (!isset($_SESSION['auth'])) {
    $_SESSION['message'] = "Please log in first.";
    header('Location: ../login.php');
    exit();
}

$user_id = $_SESSION['auth_user']['user_id'];
$name = mysqli_real_escape_string($con, $_POST['name']);
$phone = trim($_POST['phone']);
$password = trim($_POST['password']); 
$errors = [];

// Fetch current profile image
$get_user_query = "SELECT profile_image FROM users WHERE id = '$user_id'";
$get_user_query_run = mysqli_query($con, $get_user_query);
$user_data = mysqli_fetch_assoc($get_user_query_run);
$current_profile_image = $user_data['profile_image'] ?? "";

// Validate name (must not be empty)
if (empty($name)) {
    $errors[] = "Name cannot be empty.";
}

// Validate phone number (must be exactly 10 digits)
if (!preg_match('/^[0-9]{10}$/', $phone)) {
    $errors[] = "Phone number must be exactly 10 digits.";
}

// Handle profile image upload
$profile_image = $current_profile_image; // Default to current image
if (!empty($_FILES['profile_image']['name'])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["profile_image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];

    if (!in_array($imageFileType, $allowed_types)) {
        $errors[] = "Only JPG, JPEG, PNG, and GIF files are allowed.";
    } elseif (!move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target_file)) {
        $errors[] = "Error uploading the file.";
    } else {
        $profile_image = $target_file;
    }
}

// Validate password if user wants to update it
$hashed_password = null;
if (!empty($password)) {
    if (strlen($password) < 8 || 
        !preg_match('/[A-Z]/', $password) || 
        !preg_match('/[a-z]/', $password) || 
        !preg_match('/[0-9]/', $password) || 
        !preg_match('/[\W]/', $password)) {
        
        $errors[] = "Password must be at least 8 characters long, include an uppercase letter, a lowercase letter, a digit, and a special character.";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    }
}

// Show errors if any exist
if (!empty($errors)) {
    $_SESSION['message'] = implode("<br>", $errors);
    header('Location: profile.php');
    exit();
}

// Update user profile in the database
if ($hashed_password) {
    $update_query = "UPDATE users SET name='$name', phone='$phone', password='$hashed_password', profile_image='$profile_image' WHERE id='$user_id'";
} else {
    $update_query = "UPDATE users SET name='$name', phone='$phone', profile_image='$profile_image' WHERE id='$user_id'";
}

$update_query_run = mysqli_query($con, $update_query);

if ($update_query_run) {
    $_SESSION['message'] = "Profile updated successfully!";
} else {
    $_SESSION['message'] = "Something went wrong. Please try again.";
}

// Redirect to profile page
header('Location: profile.php');
exit();
?>
