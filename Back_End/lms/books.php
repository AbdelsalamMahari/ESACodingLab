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
              
              // Loop through the results and generate the HTML for each book
              while ($row = mysqli_fetch_assoc($result)) {
                  $image = $row['book_img'];
                  $title = $row['book_name'];
                  $price = $row['book_price'];
              
                  // Generate the HTML for each book dynamically
                  echo '<div class="col-lg-2 book d-flex flex-column justify-content-center align-items-center">';
                  echo '<img src="uploads/' . $image . '" alt="' . $title . '" width="150px" height="250px">';
                  echo '<h4 class="title">' . $title . '</h4>';
                  echo '<h5>' . $price . ' $ </h5>';
                  echo '<br>';
                  echo '<div class="d-flex justify-content-center">';
                  echo '<a href=""><i class="fa-regular fa-heart col-3 book-icon" style="color: #df1634;"></i></a>';
                  echo '<a href=""><i class="fa-solid fa-circle-info col-3 book-icon" style="color: #adb7c7;"></i></a>';
                  echo '<a href=""><i class="fa-solid fa-cart-plus col-3 book-icon" style="color: #050505;"></i></a>';
                  echo '</div>';
                  echo '</div>';
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