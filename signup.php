<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Sign Up | KOSELI</title>
</head>
<body>

  <header>
    <div class="container">
      <h1>KOSELI</h1>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="#products">Products</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section id="signup">
    <div class="container">
      <h2>Sign Up</h2>
      <form id="signup-form">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="confirm-password">Confirm Password:</label>
        <input type="password" id="confirm-password" name="confirm-password" required>

        <button type="submit" class="cta-button">Sign Up</button>
      </form>
    </div>
  </section>
  <footer>
    <div class="container">
      <p>&copy; 2024 KOSELI. All rights reserved.</p>
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>
