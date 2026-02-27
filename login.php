<?php
$error   = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email    = trim($_POST["email"]    ?? "");
    $password = trim($_POST["password"] ?? "");

    if (empty($email) || empty($password)) {
        $error = "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Please enter a valid email address.";
    } else {
        $success = "Login Successful! Welcome back.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login – Secure Access</title>
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
    <h1>Welcome Back</h1>
    <p class="sub">Please enter your details.</p>

    <?php if ($error): ?>
      <div class="alert alert-error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>
    <?php if ($success): ?>
      <div class="alert alert-success"><?= htmlspecialchars($success) ?></div>
    <?php endif; ?>

    <form method="POST" action="">

      <div class="field-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email"
               placeholder="user@example.com"
               value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required/>
      </div>

      <div class="field-group">
        <label for="password">Password</label>
        <div class="pass-wrap">
          <input type="password" id="password" name="password"
                 placeholder="••••••••" required/>
          <button type="button" class="eye-btn"
                  onclick="togglePass('password', this)">👁</button>
        </div>
      </div>

      <div class="link-row">
        Don't have an account? <a href="register.php">Sign up</a>
      </div>

      <button type="submit" class="btn-primary">Sign In</button>

    </form>

    <div class="divider">OR</div>

    <div class="social-row">
      <button class="btn-social btn-google">
        <svg width="16" height="16" viewBox="0 0 48 48">
          <path fill="#EA4335" d="M24 9.5c3.5 0 6.6 1.2 9 3.2l6.7-6.7C35.5 2.5 30.1 0 24 0 14.6 0 6.6 5.4 2.6 13.3l7.8 6C12.2 13 17.6 9.5 24 9.5z"/>
          <path fill="#4285F4" d="M46.5 24.5c0-1.6-.1-3.1-.4-4.5H24v8.5h12.7c-.5 2.8-2.1 5.2-4.5 6.8l7 5.4C43.4 37 46.5 31.2 46.5 24.5z"/>
          <path fill="#FBBC05" d="M10.4 28.7A14.5 14.5 0 0 1 9.5 24c0-1.6.3-3.2.9-4.7l-7.8-6A23.9 23.9 0 0 0 0 24c0 3.9.9 7.5 2.6 10.7l7.8-6z"/>
          <path fill="#34A853" d="M24 48c6.1 0 11.2-2 14.9-5.4l-7-5.4c-2 1.3-4.5 2.1-7.9 2.1-6.4 0-11.8-4.3-13.7-10.1l-7.8 6C6.6 42.6 14.6 48 24 48z"/>
        </svg>
        Google
      </button>
      <button class="btn-social btn-facebook">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="white">
          <path d="M22 12A10 10 0 1 0 10.4 21.9V15H8v-3h2.4v-2.1c0-2.4 1.4-3.7 3.6-3.7 1 0 2.1.2 2.1.2V8.7h-1.2c-1.2 0-1.6.8-1.6 1.6V12H16l-.5 3h-2.1v6.9A10 10 0 0 0 22 12z"/>
        </svg>
        Facebook
      </button>
    </div>

  </div>
</div>

<script src="js/script.js"></script>
</body>
</html>
