<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="styles-carrito.css">
    <link rel="icon" href="img/logo.ico" type="image/x-icon">

    <script src="https://kit.fontawesome.com/8aa54e52b5.js" crossorigin="anonymous"></script>
    <title>Carrito</title>
</head>
<body>
    <?php include('header.php'); ?>
    
    <main>
        <div class="menu">
            <ul class="menu-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="carrito.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
            </ul>
        </div>
        <h1 class="mi-carrito">My Shopping Cart: </h1>
        <div class="container-carrito">

            <section id="cart"> 
                
    
                
            </section>
    
        </div>
    
        <footer id="site-footer">
    
                <div class="carrito-total">
                    <h1 class="total">Total: <span class="checkout"></span></h1>
                    <a class="btn-checkout">Checkout</a>
                    <a class="btn-clear">CLEAR CART</a>
                </div>
        </footer>
    </main>

    <?php include('footer.php'); ?>
    <script src="app-carrito.js"></script>
</body>
</html>