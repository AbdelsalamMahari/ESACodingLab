<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <title>Add Book</title>
</head>
<body>
    <div class="p-3 mx-auto mt-4">
        <h1 class="text-secondary mx-auto">Add Book</h1>
        <div class="row">
            <div class="col-md-6 col-xl-4">
                <div class="form-group">
                    <label class="text-secondary">Book Name:</label>
                    <input type="text" class="form-control" id="bookName" placeholder="Enter Book Name" name="bookName">
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="form-group">
                    <label class="text-secondary">Author Name:</label>
                    <input type="text" class="form-control" id="authorName" placeholder="Enter Author Name" name="authorName">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-4">
                <div class="form-group">
                    <label class="text-secondary">Price:</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input type="number" class="form-control" step="0.01" id="price" placeholder="Enter Price" name="price">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="form-group">
                    <label class="text-secondary">Price after Discount:</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input type="number" class="form-control" step="0.01" id="disPrice" placeholder="Enter Discounted Price" name="disPrice">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6 col-xl-12">
                <label class="text-secondary">Category:</label>
                <select class="form-control" id="category" name="category">
                <option selected disabled value="">Choose...</option>
                    <?php
                    include 'connection.php';
                    // Assuming you have established a database connection
                    $sql = "SELECT `category_id`, `category_name` FROM `categories`";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $categoryId = $row['category_id'];
                            $categoryName = $row['category_name'];
                            echo "<option value='$categoryId'>$categoryName</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-md-6 col-xl-6">
                <label class="text-secondary">Book Description:</label>
                <textarea class="form-control" id="description" rows="3" placeholder="Enter Book Description" name="description"></textarea>
            </div>
            <div class="form-group col-md-6 col-xl-4">
                <label class="text-secondary">Quantity:</label>
                <input type="number" class="form-control" id="qty" name="qty">
                <label class="text-secondary">Book Image:</label>
                <input type="file" class="form-control-file" id="image" name="image">
                <button type="button" id="add" class="btn btn-success mt-2">Submit</button>
            </div>
            
        </div>
        <div class="table-responsive mt-5">
        <table class="table table-striped align-middle text-center">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Image</th>
                    <th>Book Name</th>
                    <th>Author</th>
                    <th>Price</th>
                    <th>Discounted Price</th>
                    <th>Category</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="info">
                <!-- Add rows dynamically using JavaScript or backend programming -->
            </tbody>
        </table>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>
