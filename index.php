<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MatrixStore</title>
  <!-- Link to Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    /* General Styles */
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f9;
      color: #333;
      line-height: 1.6;
    }
    /* Header */
    header {
      background: linear-gradient(135deg, #6200ea, #3700b3);
      color: white;
      padding: 1rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    header .logo {
      display: flex;
      align-items: center;
    }
    header .logo i {
      font-size: 2rem;
      margin-right: 0.5rem;
    }
    header .logo h1 {
      font-size: 1.5rem;
      margin: 0;
      font-weight: 600;
    }
    nav ul {
      list-style: none;
      display: flex;
      gap: 1.5rem;
      margin: 0;
      padding: 0;
    }
    nav ul li a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      padding: 0.5rem 1rem;
      border-radius: 5px;
      transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
    }
    nav ul li a:hover {
      background-color: rgba(255, 255, 255, 0.1);
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    /* Hero Section */
    .hero {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 70vh;
      background: linear-gradient(135deg, #6200ea, #3700b3);
      color: white;
      text-align: center;
      padding: 2rem;
    }
    .hero h2 {
      font-size: 3rem;
      margin-bottom: 1rem;
    }
    .hero p {
      font-size: 1.25rem;
      margin-bottom: 2rem;
    }
    .hero-buttons {
      display: flex;
      justify-content: center;
      gap: 1rem;
    }
    .hero .btn {
      background: white;
      color: #6200ea;
      padding: 0.75rem 1.5rem;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
      transition: transform 0.3s ease, background 0.3s ease;
    }
    .hero .btn:hover {
      background: #f4f4f9;
      transform: translateY(-2px);
    }
    nav ul li a.active {
      background-color: rgba(255, 255, 255, 0.2);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Features Section */
    .features {
      padding: 4rem 2rem;
      background: white;
      text-align: center;
    }
    .features h2 {
      font-size: 2rem;
      margin-bottom: 2rem;
      color: #6200ea;
    }
    .feature-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 2rem;
      max-width: 1200px;
      margin: 0 auto;
    }
    .feature-card {
      background: #f9f9f9;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .feature-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
    .feature-card i {
      font-size: 2rem;
      color: #6200ea;
      margin-bottom: 1rem;
    }
    .feature-card h3 {
      font-size: 1.5rem;
      margin-bottom: 1rem;
      color: #333;
    }
    .feature-card p {
      color: #666;
    }
    /* Product Cards */
    .products {
      padding: 2rem;
    }
    .product-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1rem;
    }
    .product-card {
      background-color: white;
      padding: 1rem;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .product-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 10px;
      transition: transform 0.3s ease;
    }
    .product-card img:hover {
      transform: scale(1.05);
    }
    .product-card h3 {
      margin: 1rem 0 0.5rem;
    }
    .product-card .price {
      font-size: 1.25rem;
      color: #6200ea;
      font-weight: bold;
    }
    .product-card button {
      background-color: #6200ea;
      color: white;
      border: none;
      padding: 0.5rem 1rem;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease, transform 0.3s ease;
    }
    .product-card button:hover {
      background-color: #3700b3;
      transform: scale(1.05);
    }
    /* Footer */
    footer {
      text-align: center;
      padding: 1rem;
      background: linear-gradient(135deg, #6200ea, #3700b3);
      color: white;
      margin-top: 2rem;
    }
    footer .social-links {
      margin-top: 1rem;
    }
    footer .social-links a {
      color: white;
      font-size: 1.5rem;
      margin: 0 0.5rem;
      transition: transform 0.3s ease, color 0.3s ease;
    }
    footer .social-links a:hover {
      color: #f4f4f9;
      transform: translateY(-2px);
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header>
    <div class="logo">
      <img src="images/logo1.png" alt="MatrixStore Logo" width="60" height="60" style="margin-right: 0.5rem;">
      <h1>MatrixStore</h1>
    </div>
    <nav>
      <ul>
        <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
        <li><a href="computers.html"><i class="fas fa-laptop"></i> Computers</a></li>
        <li><a href="mobiles.html"><i class="fas fa-mobile-alt"></i> Mobiles</a></li>
        <li><a href="contact.html"><i class="fas fa-envelope"></i> Contact Us</a></li>
        <li><a href="login.html"><i class="fas fa-user"></i> Login</a></li>
      </ul>
    </nav>
  </header>
  <!-- Hero Section -->
  <section class="hero">
    <div>
      <h2>Welcome to MatrixStore</h2>
      <p>Your first destination for purchasing the latest technology at competitive prices.</p>
      <div class="hero-buttons">
        <a href="#" class="btn"><i class="fas fa-laptop"></i> Explore Computers</a>
        <a href="#" class="btn"><i class="fas fa-mobile-alt"></i> Explore Phones</a>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="features">
    <h2>Why Choose MatrixStore?</h2>
    <div class="feature-grid">
      <div class="feature-card">
        <i class="fas fa-shipping-fast"></i>
        <h3>Fast Shipping</h3>
        <p>Get your products in record time.</p>
      </div>
      <div class="feature-card">
        <i class="fas fa-headset"></i>
        <h3>24/7 Support</h3>
        <p>Our support team is always available to help you.</p>
      </div>
      <div class="feature-card">
        <i class="fas fa-credit-card"></i>
        <h3>Secure Payment</h3>
        <p>We guarantee a secure and fast payment process.</p>
      </div>
    </div>
  </section>

  <!-- Products Section -->
  <section class="products">
    <h2 style="text-align: center; color: #6200ea;">Latest Products</h2>
    <div class="product-grid">
      <div class="product-card">
        <img src="https://via.placeholder.com/250x200" alt="Product 1">
        <h3>New Laptop</h3>
        <p class="price">$1500</p>
        <button><i class="fas fa-shopping-cart"></i> Add to Cart</button>
      </div>
      <div class="product-card">
        <img src="https://via.placeholder.com/250x200" alt="Product 2">
        <h3>New Smartphone</h3>
        <p class="price">$1200</p>
        <button><i class="fas fa-shopping-cart"></i> Add to Cart</button>
      </div>
      <div class="product-card">
        <img src="https://via.placeholder.com/250x200" alt="Product 3">
        <h3>Smartwatch</h3>
        <p class="price">$500</p>
        <button><i class="fas fa-shopping-cart"></i> Add to Cart</button>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2023 MatrixStore. All rights reserved.</p>
    <div class="social-links">
      <a href="#"><i class="fab fa-facebook"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
    </div>
  </footer>
</body>
</html>