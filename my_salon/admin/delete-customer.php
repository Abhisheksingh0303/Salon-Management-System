<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if (strlen($_SESSION['bpmsaid'])==0) {
    header('location:logout.php');
} else {
    // Code for deletion
    if(isset($_GET['deleteid'])) {
        $id=intval($_GET['deleteid']);
        $query=mysqli_query($con,"delete from tblcustomers where ID='$id'");
        if ($query) {
            echo "<script>alert('Customer deleted.');</script>";
            echo "<script>window.location.href='customer-list.php'</script>";
        } else {
            echo "<script>alert('Something Went Wrong. Please try again.');</script>";
            echo "<script>window.location.href='customer-list.php'</script>";
        }
    }
}
?>
