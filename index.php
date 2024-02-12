<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>KOSELI Landing Page</title>
</head>
<body>

  <header>
    <div class="container">
      <h1>KOSELI</h1>
      <nav>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#products">Products</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section id="home">
    <div class="container">
      <h2>Welcome to Our Store</h2>
      <p>Discover the latest products and exclusive deals.</p>
      <a href="signup.php" class="cta-button">Sign Up Now</a>
    </div>
  </section>

  <section id="products">
    <div class="container">
      <!-- Product listing goes here -->
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <h2>Contact Us</h2>
      <p>Have questions or need assistance? Reach out to us!</p>
      <!-- Contact form goes here -->
    </div>
  </section>

  <footer>
    <div class="container">
      <p>&copy; 2024 KOSELI. All rights reserved.</p>
    </div>
  </footer>

  <script >
    // Your JavaScript code goes here

    function showLoginForm(type) {
    const userLoginForm = document.getElementById('user-login');
    const adminLoginForm = document.getElementById('admin-login');

    if (type === 'user') {
      userLoginForm.style.display = 'block';
      adminLoginForm.style.display = 'none';
    } else if (type === 'admin') {
      userLoginForm.style.display = 'none';
      adminLoginForm.style.display = 'block';
    }
  }

  </script>
</body>
</html>
