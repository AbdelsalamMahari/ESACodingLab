<?php
// Assuming you have established a database connection

include 'connection.php';
session_start();

if (!isset($_SESSION['email'])) {
    header("location: login.php");
    exit();
}

// Check if the form is submitted
$bookId = $_POST['id'];
$email = $_SESSION['email'];
$purchaseOption = $_POST['purchase_option'];

if ($purchaseOption == 'purchase') {
    $sql = "SELECT * FROM books
            JOIN addcart c ON c.cart_book_id = books.book_id 
            WHERE books.book_id = '$bookId' AND c.cart_user_email = '$email' AND status_book = '$purchaseOption'";

    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) > 0) {
        $sql = "UPDATE addcart c
                JOIN books ON c.cart_book_id = books.book_id 
                SET c.cart_qty = c.cart_qty + 1
                WHERE books.book_id = '$bookId' AND c.cart_qty < books.quantity AND c.cart_user_email = '$email'  AND status_book = '$purchaseOption'";
        $sqll = "UPDATE addcart c
                 JOIN books ON c.cart_book_id = books.book_id 
                 SET c.total = books.book_price * c.cart_qty
                 WHERE books.book_id = '$bookId' AND c.cart_user_email = '$email' AND status_book = '$purchaseOption'";
    } else {
        // Check if the book's quantity is greater than 0
        $bookQuantityQuery = "SELECT quantity FROM books WHERE book_id = '$bookId'";
        $bookQuantityResult = mysqli_query($connection, $bookQuantityQuery);
        $bookQuantityRow = mysqli_fetch_assoc($bookQuantityResult);
        $bookQuantity = $bookQuantityRow['quantity'];

        if ($bookQuantity > 0) {
            $sql = "INSERT INTO addcart (cart_book_id, cart_user_email, cart_qty, status_book) VALUES ('$bookId', '$email', 1, '$purchaseOption')";
            $sqll = "UPDATE addcart c
                     JOIN books ON c.cart_book_id = books.book_id 
                     SET c.total = books.book_price * c.cart_qty
                     WHERE books.book_id = '$bookId' AND c.cart_user_email = '$email' AND status_book = '$purchaseOption'";

          $_SESSION['msg'] = "Added to cart!";
        } else {
            $_SESSION['msg'] = "Out of stock.";
            header('Location: books.php');
            exit();
        }
    }

    mysqli_query($connection, $sql);
    mysqli_query($connection, $sqll);
}


if ($purchaseOption == 'borrow') {
    $sql = "SELECT * FROM books
        JOIN addcart c ON c.cart_book_id = books.book_id 
        WHERE books.book_id = '$bookId' AND c.cart_user_email = '$email' AND status_book = '$purchaseOption'";

    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) > 0) {
        // Existing item in the cart, update quantity (limited to 1)
        $sql1 = "UPDATE addcart c
                JOIN books ON c.cart_book_id = books.book_id 
                SET c.cart_qty = 1
                WHERE books.book_id = '$bookId' AND c.cart_qty < books.quantity AND c.cart_user_email = '$email'  AND status_book = '$purchaseOption'";
        $sqll1 = "UPDATE addcart c
                 JOIN books ON c.cart_book_id = books.book_id 
                 SET c.total = books.borrow_price * c.cart_qty
                 WHERE books.book_id = '$bookId' AND c.cart_user_email = '$email' AND status_book = '$purchaseOption'";
    } else {
        // Check if the book's quantity is greater than 0
        $bookQuantityQuery = "SELECT quantity FROM books WHERE book_id = '$bookId'";
        $bookQuantityResult = mysqli_query($connection, $bookQuantityQuery);
        $bookQuantityRow = mysqli_fetch_assoc($bookQuantityResult);
        $bookQuantity = $bookQuantityRow['quantity'];

        if ($bookQuantity > 0) {
            // New item in the cart, insert with quantity 1
            $sql1 = "INSERT INTO addcart (cart_book_id, cart_user_email, cart_qty, status_book) VALUES ('$bookId', '$email', 1 ,'$purchaseOption')";
            $sqll1 = "UPDATE addcart c
                      JOIN books ON c.cart_book_id = books.book_id 
                      SET c.total = books.borrow_price * c.cart_qty
                      WHERE books.book_id = '$bookId' AND c.cart_user_email = '$email' AND status_book = '$purchaseOption'";

            $_SESSION['msg'] = "Added to cart!";
        } else {
            $_SESSION['msg'] = "You can't add more, it's out of stock.";
            header('Location: books.php');
            exit();
        }
    }

    mysqli_query($connection, $sql1);
    mysqli_query($connection, $sqll1);
}




// Close the database connection
mysqli_close($connection);
header('Location: books.php');
?>
