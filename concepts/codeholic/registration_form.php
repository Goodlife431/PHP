<?php 
echo '<prev>';
var_dump($_POST);
echo '</prev>';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <!-- Add Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<form action="" method="post" novalidate>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Registration Form</h3>
          </div>
          <div class="card-body">
            <form method="post" action="">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="cv_link">CV Link</label>
                <input type="url" name="cv_link" id="cv_link" class="form-control" placeholder="https://example.com/path/to/your/cv.pdf">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
              </div>
            </form>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Add Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
