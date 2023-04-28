<?php
// Include the database connection file
include('includes/dbconnection.php');

// Check if the invoice id parameter is set in the URL
if(isset($_GET['invoiceid'])) {
  // Get the invoice id from the URL parameter
  $invoiceid = $_GET['invoiceid'];

  // Prepare a delete statement
  $stmt = $con->prepare("DELETE FROM tblinvoice WHERE BillingId = ?");
  $stmt->bind_param("s", $invoiceid);

  // Execute the delete statement
  if($stmt->execute()) {
    // Invoice deleted successfully, redirect to invoice list page
    header("Location: invoices.php");
    exit();
  } else {
    // Something went wrong with the delete statement, show error message
    echo "Error deleting invoice: " . $stmt->error;
  }

  // Close statement and database connection
  $stmt->close();
  $con->close();
} else {
  // Invoice id parameter not set in the URL, redirect to invoice list page
  header("Location: invoice-list.php");
  exit();
}
?>
