<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/8aa54e52b5.js" crossorigin="anonymous"></script>
    <link rel="icon" href="img/logo.ico" type="image/x-icon">

    <title>FredoShop</title>
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
       <div class="container">
            <div class="welcome-info">
                <span>
                    <h6>Get up to 30% Off 
                        <br>
                        New Arrivals
                        <br>
                    </h6>
                    <a href="index.php"><span class="btn">SHOP NOW</span></a>
                </span>
            </div>
            <div class="welcome-image">
                <img src="img/modelo.png" alt="">
            </div>
       </div>
    </main>

    <section class="collection"> 
            <div class="collection-1">
                <img src="img/women-fashion.png" alt="" srcset="">
                <span class="btn-collections">WOMEN'S</span>
            </div>
            <div class="collection-2">
                <img src="img/accessories.png" alt="" srcset="">
                <span class="btn-collections2">ACCESSORIES</span>
            </div>
            <div class="collection-2">
                <img src="img/electronics.png" alt="" srcset="">
                <span class="btn-collections2">ELECTRONICS</span>
            </div>
            <div class="collection-1">
                <img src="img/men-fashion.png" alt="" srcset="">
                <span class="btn-collections">MEN'S</span>
            </div>
    </section>

    <section class="new-arrivals">
        <h2>New Arrivals</h2>
        <hr>
        <div class="arrivals-container">
            
        </div>
    </section>

    <section class="best-deals"> 
        <div class="container">
            <div class="welcome-image1">
                <img src="img/best-deals.png" alt="">
            </div>
            <div class="welcome-info">
                <span>
                    <h5>BEST DEALS
                        <br>
                        50% OFF
                        <br>
                    </h5>
                    <a href="index.php"><span class="btn">SHOP NOW</span></a>
                </span>
            </div>
       </div>
    </section>

    <section class="best-sellers">
        <h2>Best Sellers</h2>
        <hr>
        <div class="best-sellers-container">
           
        </div>
    </section>

    <section class="details">
            <div class="detail-box">
                <span><i class="fa-solid fa-truck"></i></span>
                <span>
                   FREE SHIPPING
                </span>
            </div>
            <div class="detail-box">
                <span><i class="fa-solid fa-money-bill"></i></span>
                <span>
                   CASH ON DELIVERY
                    
                </span>
            </div>
            <div class="detail-box">
                <span><i class="fa-solid fa-rotate-left"></i></span>
                <span>
                   45 DAYS RETURN
                    
                </span>
            </div>
            <div class="detail-box">
                <span><i class="fa-regular fa-clock"></i></span>
                <span>
                   OPENING ALL WEEK
                </span>
            </div>
    </section>

		
    <?php include('footer.php'); ?>
    <script src="app.js"></script>
</body>
</html>