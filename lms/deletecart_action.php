<?php
// Include your database connection code or any other required files
include 'connection.php';

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the "delete" button is clicked and the item ID is provided
    if (isset($_POST['delete']) && isset($_POST['cart_id'])) {
        $itemId = $_POST['cart_id'];

        // Perform the deletion query
        // Assuming you have a database connection, replace "your_table_name" with the actual table name
        $query = "DELETE FROM addcart WHERE cart_id = $itemId";

        // Execute the query
        $result = mysqli_query($connection, $query);

        if ($result) {
            // Deletion successful
            header('Location: cart.php');
        } else {
            // Deletion failed
            echo "Failed to delete item.";
        }
    }
}
?>
