<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}
?>
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
include 'connection.php';

$email=$_SESSION['email'];
$sql = "SELECT b.book_img, b.book_name, b.book_price, c.cart_id
        FROM addcart c
        JOIN books b ON c.cart_book_id = b.book_id WHERE cart_user_email='$email'";
$result = mysqli_query($connection, $sql);

?>


<div class="col-10">
    <?php
    if (mysqli_num_rows($result) == 0) {
        echo '<div class="d-flex justify-content-center align-items-center flex-column">
        <i class="big-cart fa-solid fa-cart-shopping fa-bounce"></i>
        <h1 class="cart-h1">Your cart is currently empty</h1>
        <p class="cart-p">Before proceed to checkout, you must add some books to your cart.<br>
        You will find a lot of intersting books on our "Shop" page.</p>
        <a class="btn" id="cart-btn" href="http://localhost/lms/books.php"><i class="fa-solid fa-cart-shopping" style="color: #fff;"></i>RETURN TO SHOP</a>
        </div>';
    } else {
        echo '<h1 class="d-flex justify-content-center">Purchase Book:</h1><br>';
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

        $overallTotal = 0;
        while ($row = mysqli_fetch_array($result)) {
            $image = $row['book_img'];
            $title = $row['book_name'];
            $price = $row['book_price'];
            $itemId = $row['cart_id'];
        
            // Get the quantity from the form submission or set it to 1 initially
            $quantity = isset($_POST['quantity'][$itemId]) ? $_POST['quantity'][$itemId] : 1;
        
            // Increment or decrement the quantity based on button clicks
            if (isset($_POST['increment'][$itemId])) {
                $quantity++;
            } elseif (isset($_POST['decrement'][$itemId]) && $quantity > 1) {
                $quantity--;
            }
        
            // Calculate the total
            $total = $price * $quantity;
            $overallTotal += $total;
        
            echo '<tr>';
            echo '<td><img src="uploads/' . $image . '" alt="' . $title . '" width="100px"></td>';
            echo '<td>' . $title . '</td>';
            echo '<td>' . $price . ' $</td>';
            echo '<td>' . $quantity . '</td>';
            echo '<td>$' . $total . '</td>';
            echo '<td>
                    <form method="POST" action="">
                        <input type="hidden" name="quantity[' . $itemId . ']" value="' . $quantity . '">
                        <input type="hidden" name="cart_id" value="' . $itemId . '">
                        <button type="submit" name="increment[' . $itemId . ']" class="btn btn-secondary" id="btn-secondary3"><i class="fa-solid fa-plus"></i></button>
                        <button type="submit" name="decrement[' . $itemId . ']" class="btn btn-secondary" id="btn-secondary3"><i class="fa-solid fa-minus"></i></button>
                    </form>
                </td>';
            echo '<td class="btns">
                    <form method="POST" action="deletecart_action.php">
                        <input type="hidden" name="cart_id" value="' . $itemId . '">
                        <button type="submit" name="delete" class="btn btn-danger" id="btn-danger3"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>';
            echo '</tr>';
        }
        
        echo '</tbody>';
        echo '</table>';
        echo '<div style="text-align: right;">';
        echo '<p><b>Cart Total:  </b>' . $overallTotal .' $</p>';
        echo '<button type="button" class="btn btn-primary" id="btn-primary3">Proceed to<br>Checkout</button>';
        echo '</div>';
    }
    ?>
</div>

<?php
mysqli_close($connection);
?>

</section>
<?php
include 'footer.php';
?>
</body>

</html>