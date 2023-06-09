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

// Retrieve wishlist data from the database
$sql = "SELECT * FROM addcart";
$result = mysqli_query($connection, $sql);

?>

<h1>Purchase Book:</h1><br>
<div class="col-10">
<table class="table text-center align-middle">
    <thead>
        <tr>
            <th>Image</th>
            <th>Title</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Edit</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Loop through the wishlist data and generate the HTML for each item
        while ($row = mysqli_fetch_array($result)) {
            $image = $row['book_img'];
            $title = $row['book_title'];
            $price = $row['book_price'];
            $itemId = $row['id']; // Assuming you have an item ID column in the table

            echo '<tr>';
            echo '<td><img src="uploads/' . $image . '" alt="' . $title . '" width="100px"></td>';
            echo '<td>' . $title . '</td>';
            echo '<td>' . $price . ' $</td>';
            echo '<td></td>';
            echo '<td>$</td>';
            echo '<td><button type="submit" name="delete" class="btn btn-secondary"><i class="fa-solid fa-plus"></i></button>
            <button type="submit" name="delete" class="btn btn-secondary"><i class="fa-solid fa-minus"></i></button></td>';
            echo '<td class="btns">
                    <form method="POST" action="delete_from_cart.php">
                        <input type="hidden" name="id" value="' . $itemId . '">
                        <button type="submit" name="delete" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>';
            echo '</tr>';
        }
        ?>
        <!-- <tr class="remove">
            <td colspan="6" class="fix">
                <div class="inline-btn">
                    <button type="reset" class="two-btn">Clear Cart</button>
                </div>
            </td>
            <td class="text-total">
                <h3>Cart Totals</h3>
                <p>Total :</p>
                <button type="submit" class="checkout-btn">Checkout</button>
            </td>
        </tr> -->
    </tbody>
</table>

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