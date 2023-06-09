<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Books</title>
    <link rel="stylesheet" href="css/books.css">
    <link rel="icon" href="images/Logo1.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

<?php
include 'header.php';
?>
        <!-- books -->
        <div class="container">
  <div class="row justify-content-center">
    <?php
    // Assuming you have established a database connection
    include 'connection.php';
    
    // Retrieve book data from the database
    $sql = "SELECT * FROM books";
    $result = mysqli_query($connection, $sql);
    
    // Define an array of colors
    $colors = array('--blue' => '#1886a9', '--red' => '#C12E2A', '--yellow' => '#FCB940');
    // Initialize a counter
    $counter = 0;
    
    // Loop through the results and generate the HTML for each book
    while ($row = mysqli_fetch_assoc($result)) {
        $image = $row['book_img'];
        $title = $row['book_name'];
        $price = $row['book_price'];
    
        // Get the current color from the array
        $currentColor = array_keys($colors)[$counter % count($colors)];
    
        // Generate the CSS class name using the color
        $class = 'book-' . str_replace('--', '', $currentColor);
    
        // Generate the HTML for each book dynamically with the assigned color
        echo '<div class="col-lg-2 book d-flex flex-column justify-content-center align-items-center ' . $class . '">';
        echo '<img src="uploads/' . $image . '" alt="' . $title . '" width="150px" height="250px">';
        echo '<h4 class="title"><b>' . $title . '</b></h4>';
        echo '<h5 class="price"><i>' . $price . ' $ </i></h5>';
        echo '<br>';
        echo '<div class="btns-div">';
        echo '<button type="submit" class="book-icon" ><i class="fa-solid fa-heart col-3 book-icon"></i></button>';
        echo '<button type="submit" class="book-icon" ><i class="fa-solid fa-circle-info col-3 book-icon"></i></button>';
        echo '<form action="addcart_action.php" method="post">';
        echo '<input type="hidden" name="image" value="' . $image . '">';
        echo '<input type="hidden" name="title" value="' . $title . '">';
        echo '<input type="hidden" name="price" value="' . $price . '">';
        echo '<button type="submit" class="book-icon" ><i class="fa-solid fa-cart-plus col-3 book-icon"></i></button>';
        echo '</form>';
        echo '</div>';
        echo '</div>';
        
    
        // Increment the counter
        $counter++;
    }
    
    // Close the database connection
    mysqli_close($connection);
    ?>
  
  <!-- Add the remaining book elements here -->
  </div>
</div>

        <?php
include 'footer.php';
?>
</body>
</html>