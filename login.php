<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Login | KOSELI</title>
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

  <section id="login">
    <div class="container">
      <h2>Login</h2>
      <div class="login-options">
        <button onclick="showLoginForm('user')">Login as User</button>
        <button onclick="showLoginForm('admin')">Login as Admin</button>
      </div>
      <div id="user-login" class="login-form">
        <form id="user-login-form">
          <label for="user-username">Username:</label>
          <input type="text" id="user-username" name="user-username" required>
          
          <label for="user-password">Password:</label>
          <input type="password" id="user-password" name="user-password" required>
          
          <button type="submit" class="cta-button">Login as User</button>
        </form>
      </div>
      <div id="admin-login" class="login-form">
        <form id="admin-login-form">
          <label for="admin-username">Username:</label>
          <input type="text" id="admin-username" name="admin-username" required>
          
          <label for="admin-password">Password:</label>
          <input type="password" id="admin-password" name="admin-password" required>
          
          <button type="submit" class="cta-button">Login as Admin</button>
        </form>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <p>&copy; 2024 KOSELI. All rights reserved.</p>
    </div>
  </footer>

  <script>
    // Add these functions for handling login form visibility
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

        // Add these event listeners to handle form submissions
        document.getElementById('user-login-form').addEventListener('submit', function(event) {
        event.preventDefault();
        // Handle user login form submission
        console.log('User Login:', this.user-username.value, this.user-password.value);
        });

        document.getElementById('admin-login-form').addEventListener('submit', function(event) {
        event.preventDefault();
        // Handle admin login form submission
        console.log('Admin Login:', this.admin-username.value, this.admin-password.value);
        });

  </script>
</body>
</html>
