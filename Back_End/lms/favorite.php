<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/books.css">
    <link rel="icon" href="images/Logo1.png" type="image/x-icon">
    <title>Favorite</title>
</head>
<body>
    <?php
include 'header.php';
?>
<div class="container">
  <div class="row justify-content-center">
    <?php
    // Assuming you have established a database connection
    include 'connection.php';
    $email=$_SESSION['email'];

    // Retrieve book data from the database
    $sql = "SELECT b.book_img, b.book_name, b.book_price, b.book_id, f.fav_id
            FROM favorite f
            JOIN books b ON f.fav_book_id = b.book_id WHERE fav_user_email='$email'";
    $result = mysqli_query($connection, $sql);

    // Check if the result set is empty
    if (mysqli_num_rows($result) == 0) {
      // If the result set is empty, display only the photo
      echo '<div class="d-flex justify-content-center align-items-center flex-column">
      <i class="big-heart fa-regular fa-heart fa-beat-fade"></i>
      <h1 class="heart-h1">Add books to your favorites</h1>
      <p class="heart-p">You haven\'t added any book to your favorites yet.</p>
      </div>';
    } else {
      // If the result set is not empty, display the heading and books
      echo '<div class="col-lg-12 mb-5">';
      echo '<h1 class="d-flex align-items-center">Your favorites books</h1>';
      echo '<hr>';
      echo '</div>';

      // Define an array of colors
      $colors = array('--blue' => '#1886a9', '--red' => '#C12E2A', '--yellow' => '#FCB940');
      // Initialize a counter
      $counter = 0;
      // Get the user_id from the register table
$user_id = 0; // Initialize the user_id variable

// Assuming you have established a connection to the database before this code snippet
if ($connection) {
    // Query the register table to retrieve the user_id
    $registerSql = "SELECT user_id FROM register";
    $registerResult = mysqli_query($connection, $registerSql);

    // Assuming the query returns a single row
    if ($registerResult && mysqli_num_rows($registerResult) > 0) {
        $registerRow = mysqli_fetch_assoc($registerResult);
        $user_id = $registerRow['user_id'];
    }
}

      // Loop through the results and generate the HTML for each book
      while ($row = mysqli_fetch_assoc($result)) {
        $bookId = $row['book_id'];
        $image = $row['book_img'];
        $title = $row['book_name'];
        $price = $row['book_price'];
        $itemId = $row['fav_id']; // Assuming you have an item ID column in the table

        // Get the current color from the array
        $currentColor = array_keys($colors)[$counter % count($colors)];

        // Generate the CSS class name using the color
        $class = 'book-' . str_replace('--', '', $currentColor);

        // Generate the HTML for each book dynamically with the assigned color
        echo '<div class="col-lg-2 book d-flex flex-column justify-content-center align-items-center ' . $class . '">';
        echo '<img src="uploads/' . $image . '" alt="' . $title . '" width="150px" height="250px">';
        echo '<h4 class="title">' . $title . '</h4>';
        echo '<h5 class="price">' . $price . ' $ </h5>';
        echo '<br>';
        echo '<div class="btns-div">';
        echo '<form action="deletefav_action.php" method="post">';
        echo '<input type="hidden" name="fav_id" value="' . $itemId . '">';
        echo '<button type="submit" class="book-icon" name="delete"><i class="fa-solid fa-trash col-3 book-icon"></i></button>';
        echo '</form>';
        echo '<button type="submit" class="book-icon" ><i class="fa-solid fa-circle-info col-3 book-icon"></i></button>';
        echo '<form action="addcart_action.php" method="post">';
        echo '<input type="hidden" name="id" value="' . $bookId . '">';
        echo '<input type="hidden" name="cart_user_id" value="' . $user_id . '">';
        echo '<button type="submit" class="book-icon" ><i class="fa-solid fa-cart-plus col-3 book-icon"></i></button>';
        echo '</form>';
        echo '</div>';
        echo '</div>';

        // Increment the counter
        $counter++;
      }
    }

    // Close the database connection
    mysqli_close($connection);
    ?>
  </div>
</div>

  
          <?php
  include 'footer.php';
  ?>
</body>
</html>