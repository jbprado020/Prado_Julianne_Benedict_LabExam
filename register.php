<?php
$error   = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $first_name = trim($_POST["first_name"]   ?? "");
    $last_name  = trim($_POST["last_name"]    ?? "");
    $email      = trim($_POST["email"]        ?? "");
    $password   = trim($_POST["password"]     ?? "");
    $confirm    = trim($_POST["confirm_pass"] ?? "");
    $terms      = isset($_POST["terms"]);

    if (empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($confirm)) {
        $error = "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Please enter a valid email address.";
    } elseif (strlen($password) < 6) {
        $error = "Password must be at least 6 characters.";
    } elseif ($password !== $confirm) {
        $error = "Passwords do not match.";
    } elseif (!$terms) {
        $error = "You must agree to the Terms and Conditions.";
    } else {
        $success = "Registration Successful! Welcome, " . htmlspecialchars($first_name) . "!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register – Secure Access</title>
  <link rel="stylesheet" href="css/style.css"/>
</head>
<body>

<div class="card-wrapper">

  <!-- LEFT PANEL -->
  <div class="panel-left">
    <div class="logo-bubbles">
      <div class="bubble"></div>
      <div class="bubble"></div>
    </div>
    <div class="bars">
      <div class="bar bar-long"></div>
      <div class="bar bar-short"></div>
    </div>
    <h2>Secure Access</h2>
  </div>

  <!-- RIGHT PANEL -->
  <div class="panel-right">
    <h1>Register</h1>
    <p class="sub">Please enter your details.</p>

    <?php if ($error): ?>
      <div class="alert alert-error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>
    <?php if ($success): ?>
      <div class="alert alert-success"><?= htmlspecialchars($success) ?></div>
    <?php endif; ?>

    <form method="POST" action="">

      <div class="row-2">
        <div>
          <label for="first_name">First Name</label>
          <input type="text" id="first_name" name="first_name"
                 placeholder="Juan"
                 value="<?= htmlspecialchars($_POST['first_name'] ?? '') ?>" required/>
        </div>
        <div>
          <label for="last_name">Last Name</label>
          <input type="text" id="last_name" name="last_name"
                 placeholder="Dela Cruz"
                 value="<?= htmlspecialchars($_POST['last_name'] ?? '') ?>" required/>
        </div>
      </div>

      <div class="field-group">
        <label for="email">Your email</label>
        <input type="email" id="email" name="email"
               placeholder="user@example.com"
               value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required/>
      </div>

      <div class="row-2">
        <div>
          <label for="password">Password</label>
          <div class="pass-wrap">
            <input type="password" id="password" name="password"
                   placeholder="••••••••" required/>
            <span class="check-icon">✔</span>
          </div>
        </div>
        <div>
          <label for="confirm_pass">Confirm Password</label>
          <input type="password" id="confirm_pass" name="confirm_pass"
                 placeholder="••••••••" required/>
        </div>
      </div>

      <div class="checkbox-row">
        <input type="checkbox" id="terms" name="terms"
               <?= isset($_POST['terms']) ? 'checked' : '' ?>/>
        <label for="terms" style="margin:0; font-weight:400; cursor:pointer;">
          I agree to the <a href="#">Terms and Conditions</a>
        </label>
      </div>

      <button type="submit" class="btn-primary">Sign Up</button>

    </form>

    <div class="link-row center">
      Already have an account? <a href="login.php">Sign in</a>
    </div>

  </div>
</div>

<script src="js/script.js"></script>
</body>
</html>
