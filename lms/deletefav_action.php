<?php
// Include your database connection code or any other required files
include 'connection.php';

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the "delete" button is clicked and the item ID is provided
    if (isset($_POST['delete']) && isset($_POST['fav_id'])) {
        $itemId = $_POST['fav_id'];

        // Perform the deletion query
        // Assuming you have a database connection, replace "your_table_name" with the actual table name
        $query = "DELETE FROM favorite WHERE fav_id = $itemId";

        // Execute the query
        $result = mysqli_query($connection, $query);

        if ($result) {
            // Deletion successful
            header('Location: favorite.php');
        } else {
            // Deletion failed
            echo "Failed to delete item.";
        }
    }
}
?>
