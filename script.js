// script.js

// Cart Data
let cart = [];

// Product Data (Example)
const products = [
  { id: 1, name: "Laptop Model X", price: 999.99 },
  { id: 2, name: "Smartphone Model Y", price: 799.99 },
  // Add more products as needed
];

// Add to Cart Functionality
document.querySelectorAll(".add-to-cart").forEach((button) => {
  button.addEventListener("click", (e) => {
    const productId = e.target.closest(".product-card").dataset.id;
    const product = products.find((p) => p.id === parseInt(productId));
    if (product) {
      addToCart(product);
      updateCartUI();
    }
  });
});

// Buy Now Functionality
document.querySelectorAll(".buy-now").forEach((button) => {
  button.addEventListener("click", (e) => {
    const productId = e.target.closest(".product-card").dataset.id;
    const product = products.find((p) => p.id === parseInt(productId));
    if (product) {
      addToCart(product);
      updateCartUI();
      proceedToCheckout();
    }
  });
});

// Add Product to Cart
function addToCart(product) {
  const existingItem = cart.find((item) => item.id === product.id);
  if (existingItem) {
    existingItem.quantity += 1;
  } else {
    cart.push({ ...product, quantity: 1 });
  }
  alert(`${product.name} added to cart!`);
}

// Update Cart UI
function updateCartUI() {
  const cartItems = document.querySelector(".cart-items");
  const totalElement = document.getElementById("total");
  let total = 0;

  // Clear existing cart items
  cartItems.innerHTML = "";

  // Add each item to the cart UI
  cart.forEach((item) => {
    const cartItem = document.createElement("div");
    cartItem.className = "cart-item";
    cartItem.innerHTML = `
      <span>${item.name} (x${item.quantity})</span>
      <span>$${(item.price * item.quantity).toFixed(2)}</span>
    `;
    cartItems.appendChild(cartItem);

    // Update total price
    total += item.price * item.quantity;
  });

  // Update total price
  totalElement.textContent = total.toFixed(2);
}

// Proceed to Checkout
function proceedToCheckout() {
  if (cart.length === 0) {
    alert("Your cart is empty!");
    return;
  }

  const paymentMethod = prompt("Enter payment method (e.g., Credit Card, PayPal):");
  if (paymentMethod) {
    alert(`Payment successful via ${paymentMethod}! Thank you for your purchase.`);
    cart = []; // Clear the cart
    updateCartUI();
  } else {
    alert("Payment canceled.");
  }
}

// Checkout Button
document.querySelector(".checkout").addEventListener("click", proceedToCheckout);
// script.js

// Hamburger Menu Functionality
document.addEventListener('DOMContentLoaded', () => {
  const mobileMenu = document.getElementById('mobile-menu');
  const navLinks = document.getElementById('nav-links');

  if (mobileMenu && navLinks) {
    mobileMenu.addEventListener('click', () => {
      navLinks.classList.toggle('active');
    });
  } else {
    console.error("Element with ID 'mobile-menu' or 'nav-links' not found!");
  }
});