<?php
error_reporting(E_ALL); // Report all PHP errors
ini_set('display_errors', 1); // Display errors to the browser
require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if ($_POST) {
    $userName = $_POST['userName'];
    $upassword = password_hash($_POST['upassword'], PASSWORD_DEFAULT); // Secure password hashing
    $uemail = $_POST['uemail'];

    // Use prepared statements to prevent SQL injection
    $stmt = $connect->prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $userName, $upassword, $uemail);

    if ($stmt->execute()) {
        $valid['success'] = true;
        $valid['messages'] = "Successfully Added";
        header('location:fetchUser.php');
    } else {
        $valid['success'] = false;
        $valid['messages'] = "Error while adding the members";
    }

    $stmt->close();
}

$connect->close();
echo json_encode($valid);
?>