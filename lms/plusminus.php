<?php
include "connection.php";

session_start();
if (!isset($_SESSION['email'])) {
    header("location: login.php");
    exit();
}

$email = $_SESSION['email'];

if (isset($_GET['type']) && isset($_GET['ID']) && isset($_GET['status'])) {
    $type = $_GET['type'];
    $ID = $_GET['ID'];
    $purchaseOption = $_GET['status'];

    if ($purchaseOption == 'purchase') {
        $minQty = 1; // Minimum quantity for purchase
        if ($type == 'plus') {
            $sql = "UPDATE addcart c
            JOIN books ON c.cart_book_id = books.book_id 
            SET c.cart_qty = c.cart_qty + 1
            WHERE books.book_id = '$ID' AND c.cart_qty + 1 <= books.quantity AND c.cart_user_email = '$email' AND status_book = '$purchaseOption'";
            $sqll = "UPDATE addcart c
            JOIN books ON c.cart_book_id = books.book_id 
            SET c.total = books.book_price * c.cart_qty
            WHERE books.book_id = '$ID' AND c.cart_user_email = '$email' AND status_book = '$purchaseOption'";

            mysqli_query($connection, $sql);
            mysqli_query($connection, $sqll);
            header("location:cart.php");
        } elseif ($type == 'minus') {
            $sql = "UPDATE addcart c
            JOIN books ON c.cart_book_id = books.book_id 
            SET c.cart_qty = CASE WHEN c.cart_qty > $minQty THEN c.cart_qty - 1 ELSE $minQty END
            WHERE books.book_id = '$ID' AND c.cart_user_email = '$email' AND status_book = '$purchaseOption'";
            $sqll = "UPDATE addcart c
            JOIN books ON c.cart_book_id = books.book_id 
            SET c.total = books.book_price * c.cart_qty
            WHERE books.book_id = '$ID' AND c.cart_user_email = '$email' AND status_book = '$purchaseOption'";

            mysqli_query($connection, $sql);
            mysqli_query($connection, $sqll);
            header("location:cart.php");
        }
    }

    if ($purchaseOption == 'borrow') {
        $minQty = 1; // Minimum quantity for borrow
        $maxQty = 1; // Maximum quantity for borrow
        if ($type == 'plus') {
            $sql = "UPDATE addcart c
            JOIN books ON c.cart_book_id = books.book_id 
            SET c.cart_qty = CASE WHEN c.cart_qty < $maxQty THEN c.cart_qty + 1 ELSE $maxQty END
            WHERE books.book_id = '$ID' AND c.cart_qty + 1 <= books.quantity AND c.cart_user_email = '$email' AND status_book = '$purchaseOption'";
            $sqll = "UPDATE addcart c
            JOIN books ON c.cart_book_id = books.book_id 
            SET c.total = books.borrow_price * c.cart_qty
            WHERE books.book_id = '$ID' AND c.cart_user_email = '$email' AND status_book = '$purchaseOption'";

            mysqli_query($connection, $sql);
            mysqli_query($connection, $sqll);
            header("location:cart.php");
        } elseif ($type == 'minus') {
            $sql = "UPDATE addcart c
            JOIN books ON c.cart_book_id = books.book_id 
            SET c.cart_qty = CASE WHEN c.cart_qty > $minQty THEN c.cart_qty - 1 ELSE $minQty END
            WHERE books.book_id = '$ID' AND c.cart_user_email = '$email' AND status_book = '$purchaseOption'";
            $sqll = "UPDATE addcart c
            JOIN books ON c.cart_book_id = books.book_id 
            SET c.total = books.borrow_price * c.cart_qty
            WHERE books.book_id = '$ID' AND c.cart_user_email = '$email' AND status_book = '$purchaseOption'";

            mysqli_query($connection, $sql);
            mysqli_query($connection, $sqll);
            header("location:cart.php");
        }
    }
}
?>
