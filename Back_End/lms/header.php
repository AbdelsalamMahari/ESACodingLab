<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/header.css">
    <title>Header</title>
</head>
<body>
    <header>
        <section class="head-top">
            <div class="top-icons">
                <a href="#" class="tw"><i class="fa-brands fa-twitter"></i></a>
                <a href="#" class="in"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="fb"><i class="fa-brands fa-facebook"></i></a>
                <a href="#" class="tt"><i class="fa-brands fa-tiktok"></i></a>
                <a href="#" class="wa"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
            <nav class="nav-top">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fa-solid fa-user"></i>
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="http://localhost/lms/login.php"><i class="fa-solid fa-arrow-right-to-bracket"></i>LOGIN</a>
                    </li>
                    <li><a class="dropdown-item" href="http://localhost/lms/signup.php"><i class="fa-solid fa-user-plus"></i>SIGN UP</a></li>
                </ul>
                <a href="#"><i class="fa-solid fa-heart"></i></a>
                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                <a href="#" class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-bs-toggle="dropdown" aria-expanded="false"><i
                        class="fa-solid fa-magnifying-glass"></i>SEARCH</a>
                <div class="dropdown-menu p-3" aria-labelledby="searchDropdown">
                    <div class="input-group">
                        <input type="text" class="form-control search-input" placeholder="Search...">
                        <button class="btn btn-primary search-btn" type="submit"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </div>
            </nav>
        </section>
        <hr class="my-hr none-hr">
        <section class="head-down">
            <div class="logo">
                <h1>BOOK<span>STORE</span></h1>
            </div>
            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <nav class="nav-bar">
                <ul>
                    <li>
                        <a href="http://localhost/lms/index.php#" class="active">HOME</a>
                    </li>
                    <li>
                        <a href="http://localhost/lms/books.php">SHOP</a>
                    </li>
                    <li>
                        <a href="">CONTACT US</a>
                    </li>
                    <li>
                        <a href="">ABOUT US</a>
                    </li>
                </ul>
            </nav>
        </section>
    </header>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/header.js"></script>
</body>
</html>