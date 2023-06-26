<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/Logo1.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bookinfo.css">
    <title>Book Info</title>
</head>
<?php
include 'header.php';
?>
<body>
    <?php
    include 'connection.php';
    if (isset($_GET['bookid'])) {
        $bookId = $_GET['bookid'];
        $sql = "SELECT books.*, categories.category_name, authors.author_name
                FROM books
                JOIN categories ON books.category = categories.category_id
                JOIN author_books ON books.book_id = author_books.book_id
                JOIN authors ON author_books.author_id = authors.author_id
                WHERE books.book_id = '$bookId'";

        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_array($result);
        $bookId = $row['book_id'];
        $bookname = $row['book_name'];
        $bookprice = $row['book_price'];
        $bookimage = $row['book_img'];
        $categoryname = $row['category_name'];
        $authorname = $row['author_name'];
        $description = $row['book_desc'];
    }
    ?>
    <div id="myModal2" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Would you like to buy or borrow the book?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="cart-option-form" method="POST" action="addcart_action.php">
                    <input type="hidden" id="modal-book-id" name="id" value="">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="purchase_option" id="purchase" value="purchase" checked>
                        <label class="form-check-label" for="purchase" style="color: #1886a9;">buy</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="purchase_option" id="rent" value="rent">
                        <label class="form-check-label" for="rent" style="color: #1886a9;">borrow</label>
                    </div>
                    <br>
                    <button type="submit" name="submit" class="btn btn-primary" style="background-color: #1886a9; border-color: #1886a9;">Add to cart</button>
                </form>
            </div>
        </div>
    </div>
</div>
    <div class="cont">
        <div class="book-cont">
                <div class="main-img">
                    <img src="uploads/<?php echo $bookimage; ?>" alt="" width="318px" height="501px">
                </div>
            <div class="info-book col-sm-7">
                <div>
                    <h1 class="book-title"><?php echo $bookname; ?></h1>
                    <p class="stock">In stock</p>
                </div>
                <div class="author">
                    <p><?php echo $authorname; ?></p>
                </div>
                <div class="price">
                    <h3><?php echo $bookprice; ?> $</h3>
                </div>
                <div class="btns row">
                    <div class="col-sm-2">
                        <input class="form-control" id="qty" type="number" name="qty" value="qty" min="1" max="100"
                            placeholder="1">
                    </div>
                    <div class="col-sm-3">
                      <button type="button" class="btn btn-primary add-cart" id="btn-primary2" data-bs-toggle="modal" data-bs-target="#myModal2" data-bookid="<?php echo $bookId; ?>">Add To Cart</button>
                    </div>
                    <div class="col-sm-3">
                    <form action="favorite_action.php" method="POST">
                      <input type="hidden" name="id" value="<?php echo $bookId; ?>">
                      <button href="" class="btn btn-danger" id="btn-danger2"><i class="fa-solid fa-heart" style="color: white;"></i></button>
                    </form>
                    </div>
                </div>
                <div class="infor">
                    <p><span class="bold-span">Author: </span><?php echo $authorname; ?></p>
                    <p><span class="bold-span">Category: </span><?php echo $categoryname; ?></p>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
    <div class="cont2">
        <div class="details">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#details" id="nav-link">Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#reviews" id="nav-link">Reviews</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="details">
                    <!-- Content details -->
                    <h3>Description</h3>
                    <p><?php echo $description; ?></p>
                </div>
                <div class="tab-pane fade" id="reviews">
                    <!-- Reviews -->
                    <h3>CUSTOMER REVIEWS</h3>
                    <div class="review">
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>Amazing Book!</h4>
                        <p>This book is simply incredible. The story is captivating, and the characters are well-developed. It's a perfect blend of mystery, adventure, and life lessons. I couldn't put it down once I started reading it. Highly recommended for both children and adults!</p>
                        <p><strong>By: John Doe</strong></p>
                    </div>
                    <div>
                        <form action="">
                            <label for="">Title *</label>
                            <input type="text" name="review" class="form-control" placeholder="Title review">
                            <label for="">Review *</label>
                            <textarea name="" id="" cols="30" rows="10"class="form-control" placeholder="review"></textarea>
                            <button type="submit" class="btn btn-secondary">Leave A Review</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
include 'footer.php';
?>
    <script src="js/info.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>