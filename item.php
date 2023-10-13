<?php
// Incluye el código PHP para obtener los datos del artículo
include('get-item.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="styles-item.css">
    <link rel="icon" href="img/logo.ico" type="image/x-icon">

    <script src="https://kit.fontawesome.com/8aa54e52b5.js" crossorigin="anonymous"></script>
    <?php
        // Incluye el código PHP para obtener los datos del artículo
        

        if ($item) {
            echo '<title>' . htmlspecialchars($item[0]['title']) . '</title>';
        }

        if (isset($conn)) {
            $conn->close();
        }
    ?>

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
            <?php
            
            if ($item) {
            ?>
            <div class="item-container">
                <div class="item-path">
                   <a href="index.php">Home</a>  > <?php echo ucfirst($item[0]['category']); ?> > <?php echo $item[0]['title']; ?>
                </div>
                <hr>
                <div class="item-info">
                    <div class="item-pic">
                        <img src="<?php echo $item[0]['image']; ?>" alt="<?php echo $item[0]['id']; ?>">
                    </div>
                    <div class="item-overview">
                        <h2 class="item-title"><?php echo $item[0]['title']; ?></h2>
                        <span class="item-description"><?php echo $item[0]['description']; ?></span>
                        <div class="item-delivery">
                            <span><i class="fa-solid fa-truck"></i></span>
                            <span>
                            FREE SHIPPING
                            </span>
                        </div>
                        
                        <span class="card-precio">$ <?php echo $item[0]['price']; ?></span>
                        
                        <div class="item-add">
                            <span>Quantity: </span>
                            <div class="item-quantity">
                                <span><i class="fa-solid fa-minus"></i></span>
                                <span class="quantity"></span>
                                <span><i class="fa-solid fa-plus"></i></span>
                            </div>
                            <a href="carrito.php">
                                <div class="add-toCart">
                                    <span>Add to cart</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            } else {
                echo "<p>No se encontraron datos del artículo.</p>";
            }
            
            ?>
    </main>
    <?php include('footer.php'); 
    
    
    ?>

    <script src="app-item.js"></script>
</body>
</html>