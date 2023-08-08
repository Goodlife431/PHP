<?php
define('REQUIRED_FIELD_ERROR', 'This field is required');
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // echo '<pre>';
  // var_dump($_POST);
  // echo '</pre>';

  // $username = $_POST['username']; 
  // echo '<pre>';
  // var_dump($username);
  // echo '</pre>';

  $username = post_data('username');
  $email = post_data('email');
  $password = post_data('password');
  $confirm_password = post_data('confirm_password');
  $cv_link = post_data('cv_link');

  echo '<pre>';
  var_dump($username, $email, $password, $confirm_password, $cv_link);
  echo '</pre>';

  if (!$username) {
    $errors['username'] = REQUIRED_FIELD_ERROR;
  }elseif(strlen($username) < 6 || strlen($username) > 16){
    $errors['username'] = "username must be between 6 to 16 characters";
  }
  if (!$email) {
    $errors['email'] = REQUIRED_FIELD_ERROR;
  }elseif(filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['email'] = 'This field must be a valid email address';
  }
  if (!$password) {
    $errors['password'] = REQUIRED_FIELD_ERROR;
  }
  if (!$confirm_password) {
    $errors['confirm_password'] = REQUIRED_FIELD_ERROR;
  }
  if (!$cv_link) {
    $errors['cv_link'] = REQUIRED_FIELD_ERROR;
  }
}
function post_data($field)
{
  // if (isset($_POST[$field])){
  //   return false;
  // }
  // $data = $_POST[$field];
  $_POST[$field] ??= "";


  return htmlspecialchars(stripslashes($_POST[$field]));
}
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
                  <label for="username">Username</label>
                  <input type="text" name="username" id="username" class="form-control <?php echo isset($errors['username']) ? 'is-invalid' : ''?>" required> 
                <small class="form-text text-muted">Min 6 and max 16 charaters</small>
                <div class="invalid-feedback">
                  <?php $errors['username'] ?? '' 
                  ?>
                </div> 
                </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control <?php echo isset($errors['username']) ? 'is-invalid' : ''?>" required>
                  </div>
                  <div class="invalid-feedback">
                  <?php $errors['username'] ?? '' 
                  ?>
                </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control <?php echo isset($errors['username']) ? 'is-invalid' : ''?>" required>
                  </div>
                  <div class="invalid-feedback">
                  <?php $errors['username'] ?? '' 
                  ?>
                </div>
                  <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control <?php echo isset($errors['username']) ? 'is-invalid' : ''?>" required>
                  </div>
                  <div class="invalid-feedback">
                  <?php $errors['username'] ?? '' 
                  ?>
                </div>
                  <div class="form-group">
                    <label for="cv_link">CV Link</label>
                    <input type="url" name="cv_link" id="cv_link" class="form-control <?php echo isset($errors['username']) ? 'is-invalid' : ''?>" placeholder="https://example.com/path/to/your/cv.pdf">
                  </div>
                  <div class="invalid-feedback">
                  <?php $errors['username'] ?? '' 
                  ?>
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