<!DOCTYPE html>
<html>
<head>
  <title>Forget Password - Email Validation</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h2>Forget Password - Email Validation</h2>
    <form action="forgetpass_action.php" method="POST">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <button type="submit" class="btn btn-primary">Verify Email</button>
    </form>
  </div>
</body>
</html>