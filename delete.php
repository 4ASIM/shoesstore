<?php
 include "db_conn.php";
// Start the session (assuming session-based authentication)
session_start();

// Check if the user is logged in
if (isset($_SESSION['user_name'])) {
    $userId = $_SESSION['user_name'];
    echo $userId;
    // Fetch the user's information
}

?>
<?php
 $query= $conn->prepare("DELETE FROM users WHERE user_name= ?");
 $query->bind_param('s',$userId);
 $query->execute();
 header("location:login.php");

 ?>