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
        <div class="container">
  <div class="row justify-content-center">
    <?php
    include 'connection.php';
    
    $sql = "SELECT * FROM books";
$result = mysqli_query($connection, $sql);

$colors = array('--blue' => '#1886a9', '--red' => '#C12E2A', '--yellow' => '#FCB940');
$counter = 0;

$user_id = 0;

if ($connection) {
    $registerSql = "SELECT * FROM register";
    $registerResult = mysqli_query($connection, $registerSql);

    if ($registerResult && mysqli_num_rows($registerResult) > 0) {
        $registerRow = mysqli_fetch_assoc($registerResult);
        $user_email = $registerRow['db_email'];
    }
}

while ($row = mysqli_fetch_assoc($result)) {
    $bookId = $row['book_id'];
    $image = $row['book_img'];
    $title = $row['book_name'];
    $price = $row['book_price'];

    $currentColor = array_keys($colors)[$counter % count($colors)];

    $class = 'book-' . str_replace('--', '', $currentColor);

    echo '<div class="col-lg-2 book d-flex flex-column justify-content-center align-items-center ' . $class . '">';
    echo '<img src="uploads/' . $image . '" alt="' . $title . '" width="150px" height="250px">';
    echo '<div class="title">' . $title . '</div>';
    echo '<div class="price">' . $price . ' $ </div>';
    echo '<br>';
    echo '<div class="btns-div">';
    echo '<form action="favorite_action.php" method="post">';
    echo '<input type="hidden" name="id" value="' . $bookId . '">';
    echo '<input type="hidden" name="db_email" value="' . $user_email. '">';
    echo '<button type="submit" class="book-icon"><i class="fa-solid fa-heart col-3 book-icon"></i></button>';
    echo '</form>';
    echo '<button type="submit" class="book-icon"><i class="fa-solid fa-circle-info col-3 book-icon"></i></button>';
    echo '<form action="addcart_action.php" method="post">';
    echo '<input type="hidden" name="id" value="' . $bookId . '">';
    echo '<input type="hidden" name="db_email" value="' . $user_email . '">';
    echo '<button type="submit" class="book-icon"><i class="fa-solid fa-cart-plus col-3 book-icon"></i></button>';
    echo '</form>';
    echo '</div>';
    echo '</div>';

    $counter++;
}

mysqli_close($connection);
?>
  
  </div>
</div>

        <?php
include 'footer.php';
?>
</body>
</html>