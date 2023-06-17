<!DOCTYPE html>
<html lang="en">
<?php
include "adminheader.php";
include 'C:\xampp\htdocs\Signup\connection.php';

$editMode = false;
$editID = '';
if (isset($_GET['edit'])) {
  $editMode = true;
  $editID = $_GET['edit'];
  $sql = "SELECT * FROM product WHERE id = '$editID'";
  $result = mysqli_query($con, $sql);
  $product = mysqli_fetch_array($result);
}

?>
</div>
<div class="p-3 mx-auto">
  <h1 class="text-secondary mx-auto"><?php echo $editMode ? 'Edit Book' : 'Add Book'; ?></h1>
  <form method="POST" action="<?php echo ($editMode) ? 'editproduct.php' : 'addBook_action.php'; ?>" enctype="multipart/form-data">
    <div class="row">
      <div class="col-md-6 col-xl-4">
        <div class="form-group">
        <?php if (isset($_GET['error'])) : ?>
            <p style="color: red;">There is a product with the same name</p>
          <?php endif; ?>
        <?php if ($editMode) : ?>
            <input type="hidden" name="bookID" value="<?php echo $editID; ?>">
          <?php endif; ?>
          <label for="book-name" class="text-secondary">Book Name:</label>
          <input type="text" class="form-control" id="book-name" name="book_name" placeholder="Enter Book Name" value="<?php echo $editMode ? $product['db_book'] : ''; ?>">
        </div>
      </div>
      <div class="col-md-6 col-xl-4">
        <div class="form-group">
          <label for="author-name" class="text-secondary">Author Name:</label>
          <input type="text" class="form-control" id="author-name" name="author_name" placeholder="Enter Author Name" value="<?php echo $editMode ? $product['db_author'] : ''; ?>">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-xl-4">
        <div class="form-group">
          <label for="price" class="text-secondary">Price:</label>
          <div class="input-group">
            <span class="input-group-text">$</span>
            <input type="number" class="form-control" id="price" name="price" placeholder="Enter Price" value="<?php echo $editMode ? $product['db_price'] : ''; ?>">
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xl-4">
        <div class="form-group">
          <label for="discount-price" class="text-secondary">Price after Discount:</label>
          <div class="input-group">
            <span class="input-group-text">$</span>
            <input type="number" class="form-control" id="discount-price" name="discount_price" placeholder="Enter Discounted Price" value="<?php echo $editMode ? $product['db_dprice'] : ''; ?>">
          </div>
        </div>
      </div>
      <div class="form-group col-md-6 col-xl-12">
        <label for="category" class="text-secondary">Category:</label>
        <select class="form-control" id="category" name="category">
          <option value="category1" <?php echo ($editMode && $product['db_category'] == 'category1') ? 'selected' : ''; ?>>Category 1</option>
          <option value="category2" <?php echo ($editMode && $product['db_category'] == 'category2') ? 'selected' : ''; ?>>Category 2</option>
          <option value="category3" <?php echo ($editMode && $product['db_category'] == 'category3') ? 'selected' : ''; ?>>Category 3</option>
        </select>
      </div>
      <div class="form-group col-md-6 col-xl-6">
        <label for="description" class="text-secondary">Book Description:</label>
        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter Book Description"><?php echo $editMode ? $product['db_description'] : ''; ?></textarea>
      </div>
      <div class="form-group col-md-6 col-xl-4">
        <label for="image" class="text-secondary">Book Image:</label>
        <input type="file" class="form-control-file" id="image" name="image">
        
      </div>
    </div>
    <input type="hidden" name="edit_id" value="<?php echo $editID; ?>">
    <button type="submit" class="btn btn-success mt-2"><?php echo $editMode ? 'Update' : 'Submit'; ?></button>
  </form>
</div>
</div>
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/jquery-ui/jquery-ui.js"></script>
<script src="assets/plugins/popper/popper.js"></script>
<script src="assets/plugins/feather-icon/feather.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/pace/pace.min.js"></script>
<script src="assets/plugins/countup/counterup.min.js"></script>
<script src="assets/plugins/waypoints/waypoints.min.js"></script>
<script src="assets/plugins/chartjs/chartjs.js"></script>
<script src="assets/plugins/apex-chart/apexcharts.min.js"></script>
<script src="assets/plugins/apex-chart/irregular-data-series.js"></script>
<script src="assets/plugins/simpler-sidebar/jquery.simpler-sidebar.min.js"></script>
<script src="assets/js/dashboard/sales-dashboard-init.js"></script>
<script src="assets/js/jquery.slimscroll.min.js"></script>
<script src="assets/js/highlight.min.js"></script>
<script src="assets/js/app.js"></script>
<script src="assets/js/custom.js"></script>
</body>

</html>
