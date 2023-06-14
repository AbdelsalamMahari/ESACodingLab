<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/Logo1.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cart.css">
    <title>My Cart</title>
</head>

<body>
<?php
include 'header.php';
?>

    <section class="add-cart-section">
        <?php
// Assuming you have established a database connection
include 'connection.php';

$email=$_SESSION['email'];
// Retrieve wishlist data from the database
$sql = "SELECT b.book_img, b.book_name, b.book_price, c.cart_id
        FROM addcart c
        JOIN books b ON c.cart_book_id = b.book_id WHERE cart_user_email='$email'";
$result = mysqli_query($connection, $sql);

?>


<div class="col-10">
    <?php
    // Check if the result set is empty
    if (mysqli_num_rows($result) == 0) {
        // Add your photo here
        echo '<div class="d-flex justify-content-center align-items-center flex-column">
        <i class="big-cart fa-solid fa-cart-shopping fa-bounce"></i>
        <h1 class="cart-h1">Your cart is currently empty</h1>
        <p class="cart-p">Before proceed to checkout, you must add some books to your cart.<br>
        You will find a lot of intersting books on our "Shop" page.</p>
        <a class="btn" id="cart-btn" href="http://localhost/lms/books.php"><i class="fa-solid fa-cart-shopping"></i>RETURN TO SHOP</a>
        </div>';
    } else {
        echo '<h1 class="d-flex justify-content-center">Purchase Book:</h1><br>';
        // Render the table
        echo '<table class="table text-center align-middle">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Image</th>';
        echo '<th>Title</th>';
        echo '<th>Price</th>';
        echo '<th>Quantity</th>';
        echo '<th>Total</th>';
        echo '<th>Edit</th>';
        echo '<th>Action</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        // Loop through the wishlist data and generate the HTML for each item
        while ($row = mysqli_fetch_array($result)) {
            $image = $row['book_img'];
            $title = $row['book_name'];
            $price = $row['book_price'];
            $itemId = $row['cart_id']; // Assuming you have an item ID column in the table

            echo '<tr>';
            echo '<td><img src="uploads/' . $image . '" alt="' . $title . '" width="100px"></td>';
            echo '<td>' . $title . '</td>';
            echo '<td>' . $price . ' $</td>';
            echo '<td>1</td>';
            echo '<td>$</td>';
            echo '<td><button type="submit" class="btn btn-secondary"><i class="fa-solid fa-plus"></i></button>
            <button type="submit" class="btn btn-secondary"><i class="fa-solid fa-minus"></i></button></td>';
            echo '<td class="btns">
                    <form method="POST" action="deletecart_action.php">
                        <input type="hidden" name="cart_id" value="' . $itemId . '">
                        <button type="submit" name="delete" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
    }
    ?>
</div>



<?php
// Close the database connection
mysqli_close($connection);
?>

    </section>
    <?php
include 'footer.php';
?>
</body>

</html>