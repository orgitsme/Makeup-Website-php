<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makeup Shop - Hot Deals</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        p{
            color:green;
        }
        .original-price{
            color: red;
        }
    </style>
</head>
<body>
    <header>
        <h1>Hot Deals</h1>
        <nav>
            <ul>
            <li><a href="index.PHP">Home</a></li>
                <li><a href="products.PHP">Products</a></li>
                <li><a href="cart.PHP">Cart</a></li>
                <li><a href="hotdeals.PHP">Hot Deals</a></li>
                <div class="input-container">
               
                <a href="LOGIN.PHP">
    <i   class="fa fa-user"></i>
</a>

 
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Hot Deals</h2>
            <div class="product">
                <img src="images/p1.jpg" alt="Product 1">
                <h3>Full kit</h3>
                <p><span class="original-price">$100.00</span> $50.00</p>
                <button class="add-to-cart" data-name="Full kit" data-price="50.00">Add to Cart</button>
            </div>
            <div class="product">
                <img src="images/p2.jpg" height="185PX" alt="Product 2">
                <h3>Eye liner KIT</h3>
                <p><span class="original-price">$50.00</span> $25.00</p>
                <button class="add-to-cart" data-name="Eye liner KIT" data-price="25.00">Add to Cart</button>
            </div>
            <div class="product">
                <img src="images/P3.JPG" width="100%" height="185PX" alt="Product 3">
                <h3>Face Makeup</h3>
                <p><span class="original-price">$80.00</span> $40.00</p>
                <button class="add-to-cart" data-name="Face Makeup" data-price="40.00">Add to Cart</button>
            </div>
            <div class="product">
                <img src="images/p4.jpg" width="100%" alt="Product 4">
                <h3>Nail polish Set</h3>
                <p><span class="original-price">$60.00</span> $30.00</p>
                <button class="add-to-cart" data-name="Nail polish Set" data-price="30.00">Add to Cart</button>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Makeup Shop</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
