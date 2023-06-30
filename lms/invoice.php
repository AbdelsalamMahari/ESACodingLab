<?php
session_start();
include 'connection.php';

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

$email = $_SESSION['email'];
$sql = "SELECT b.book_name, b.book_price, b.borrow_price, c.cart_qty, c.total, c.status_book
        FROM addcart c
        JOIN books b ON c.cart_book_id = b.book_id WHERE cart_user_email='$email'";
$result = mysqli_query($connection, $sql);

$purchaseTotal = 0;
$borrowTotal = 0;
$overallTotal = 0;

$invoiceRows = '';
$index = 1;

while ($row = mysqli_fetch_array($result)) {
    $title = $row['book_name'];
    $quantity = $row['cart_qty'];

    // Get the correct price based on status
    $status = $row['status_book'];
    $price = ($status == 'purchase') ? $row['book_price'] : $row['borrow_price'];
    $total = $row['total'];

    if ($status == 'purchase') {
        $purchaseTotal += $total;
    } else {
        $borrowTotal += $total;
    }

    $overallTotal += $total;

    $invoiceRows .= '<tr>';
    $invoiceRows .= '<td>' . $index . '</td>';
    $invoiceRows .= '<td>' . $title . '</td>';
    $invoiceRows .= '<td>' . $status . '</td>';
    $invoiceRows .= '<td>' . $price . ' $</td>';
    $invoiceRows .= '<td>' . $quantity . '</td>';
    $invoiceRows .= '<td>$' . $total . '</td>';

    if ($status == 'borrow') {
        $currentDate = date('Y-m-d');
        $maxDueDate = date('Y-m-d', strtotime('+1 month', strtotime($currentDate)));

        $invoiceRows .= '<td>From <input type="date" class="form-control" name="borrow_time_from[]" min="' . $currentDate . '" required> To <input type="date" class="form-control" name="borrow_time_to[]" min="' . $currentDate . '" max="' . $maxDueDate . '" required></td>';
    } else {
        $invoiceRows .= '<td>///</td>';
    }

    $invoiceRows .= '</tr>';

    $index++;
}

mysqli_close($connection);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link type="text/css" rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css" />
    <link type="text/css" rel="stylesheet" href="assets/plugins/flag-icon/flag-icon.min.css" />
    <link type="text/css" rel="stylesheet" href="assets/plugins/simple-line-icons/css/simple-line-icons.css">
    <link type="text/css" rel="stylesheet" href="assets/plugins/ionicons/css/ionicons.css">

    <link type="text/css" rel="stylesheet" href="assets/plugins/chartist/chartist.css">
    <link type="text/css" rel="stylesheet" href="assets/plugins/apex-chart/apexcharts.css">
    <link type="text/css" rel="stylesheet" href="assets/css/app.min.css" />
    <link type="text/css" rel="stylesheet" href="assets/css/style.min.css" />
</head>
<?php
include 'header.php';
?>

<body>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                        <div class="invoice col-md-12">
                         
                        <h5 class="card-title bd-b pd-y-20 text-center">Invoice</h5>
                            <div class="invoice-company text-inverse f-w-600">
                                Library Book Store
                            </div>
                            <div class="invoice-header ">
                                <div class=" invoice-from ">
                                    <large><b>#From :</b></large>
                                    <address class="m-t-5 m-b-5">
                                        Book Store<br>
                                        123 Street, City<br>
                                        State, Country<br>
                                        Phone: (123) 456-7890
                                    </address>
                                </div>
                                <div class="invoice-to">
                                <large><b>#To :</b></large>
                               <address class="m-t-5 m-b-5">
                                        <?php echo $email; ?>
                                    </address>
                                </div>
                                <div class="invoice-date">
                                <large><b>Invoice Date :</b></large>
                                    <div class="date text-inverse m-t-5">
                                        <?php echo date('Y-m-d'); ?>
                                    </div>
                                    <div class="invoice-detail">
                                    <large><b>Invoice #ID :</b></large>
                                        <div class="date text-inverse m-t-5">
                                            <?php echo uniqid(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-content">
                                <div class="table-responsive">
                                    <table class="table table-invoice">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Status</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Total</th>
                                                <th>Due Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php echo $invoiceRows; ?>
                                        </tbody>
                                    </table>
                                </div><br>
                                <div class="invoice-price">
                                    <div class="invoice-price-left">
                                        <div class="invoice-price-row">
                                            <div class="sub-price">
                                            <large><b>--Purchase Total :</b></large>
                                                <span class="text-inverse">$<?php echo $purchaseTotal; ?></span>
                                            </div>
                                            <div class="sub-price">
                                            <large><b>--Borrow Total :</b></large>
                                                <span class="text-inverse">$<?php echo $borrowTotal; ?></span>
                                            </div>
                                            <div class="sub-price">
                                            <large><b>--Overall Total :</b></large>
                                                <span class="text-inverse">$<?php echo $overallTotal; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                            <div class="invoice-note">
                                * Make all cheques payable to Book Store.<br>
                                * Payment is due within 30 days.<br>
                                * If you have any questions concerning this invoice, contact Book Store.<br>
                            </div>
                           </div>
                           <hr>
                         <div class="text-right mg-y-20">
                            <button type="submit" class="btn btn-primary mg-t-5"><i class="fa fa-dollar"></i> Proceed to payment</button>
                         </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
include 'footer.php';
?>
        
   

    <script src="assets/js/vendor.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/plugins/chartist/chartist.js"></script>
    <script src="assets/plugins/apex-chart/apexcharts.js"></script>
</body>

</html>