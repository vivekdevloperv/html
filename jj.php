<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My E-Commerce Store</title>
    <link rel="stylesheet" href="styles.css">
    <style>

.search-bar {
    margin: 1em;
}

.search-bar input {
    padding: 0.5em;
}

.user-section {
    float: right;
    margin: 1em;
}

.user-section a {
    margin-left: 1em;
    text-decoration: none;
    color: #333;
}

.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.7);
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 30%;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
</style>
</head>
<body>

    <header>
        <h1>My E-Commerce Store</h1>
        <div class="search-bar">
            <input type="text" placeholder="Search products...">
            <button>Search</button>
        </div>
        <div class="user-section">
            <a href="#" class="login">Login</a>
            <a href="#" class="cart">Cart (0)</a>
        </div>
    </header>

    <section class="product">
        <img src="product1.jpg" alt="Product 1">
        <h2>Product 1</h2>
        <p>Description of Product 1.</p>
        <span class="price">$19.99</span>
        <button>Add to Cart</button>
    </section>

    <section class="product">
        <img src="product2.jpg" alt="Product 2">
        <h2>Product 2</h2>
        <p>Description of Product 2.</p>
        <span class="price">$29.99</span>
        <button>Add to Cart</button>
    </section>

    <!-- More product sections can be added -->

    <footer>
        <p>&copy; 2023 My E-Commerce Store</p>
    </footer>

    <div id="login-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Login</h2>
            <form>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Login</button>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
