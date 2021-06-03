<?php
// Import User Classes
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/UserPremium.php';
//Import Products Classes
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/Food.php';
require_once __DIR__ . '/classes/Clothing.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Extends</title>
    <!-- STYLE -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <img src="./img/Boolzon-logo.png" alt="logo">
    </header>

    <main>
        <!-- USER SECT. -->
        <section class="user-section">
            <?php
            // Users array
            $users = [];

            // Users Instances
            // User 1
            try{
                $user1 = new User('Marco', 'Bagnasco', 33);
            } catch(Exception $e){
                echo 'Exception: ' . $e->getMessage();
            }
            $user1->setCreated('2019-25-01');
            $user1->setEmail('marco.b@gmail.com');
            $users[] = $user1;

            // User 2
            try{
                $user2 = new UserPremium('Paolo', 'Duzioni', 39, 2);
            } catch(Exception $e){
                echo 'Exception: ' . $e->getMessage();
            }
            $user2->setCreated('2020-05-05');
            $users[] = $user2;

            // User 3
            try{
                $user3 = new UserPremium('Andrea', 'Pozzi', 29, 1);
            } catch(Exception $e){
                echo 'Exception: ' . $e->getMessage();
            }
            $user3->setCreated('2017-08-11');
            $user3->setEmail('andre_poz@gmail.com');
            $users[] = $user3;

            // User 4
            try{
                $user4 = new User('Laura', 'Bianchi', 21);
            } catch(Exception $e){
                echo 'Exception: ' . $e->getMessage();
            }
            $user4->setCreated('2021-02-04');
            $user4->setEmail('lalli@hotmail.com');
            $users[] = $user4;

            // User 5
            try{
                $user5 = new User('Umberto', 'Razza', 65);
            } catch(Exception $e){
                echo 'Exception: ' . $e->getMessage();
            }
            $user5->setCreated('2020-21-07');
            $users[] = $user5;

            // User 6
            try{
                $user6 = new UserPremium('Massimo', 'Campagna', 61, 2);
            } catch(Exception $e){
                echo 'Exception: ' . $e->getMessage();
            }
            $user6->setCreated('2021-31-01');
            $user6->setEmail('max@alice.it');
            $users[] = $user6;

            // User 7
            try{
                $user7 = new UserPremium('Paolo', 'Duzioni', 79, 1);
            } catch(Exception $e){
                echo 'Exception: ' . $e->getMessage();
            }
            $user7->setCreated('2020-20-02');
            $users[] = $user7;

            // Print Users
            foreach($users as $user) { ?> 
                <div class="user">
                    <?php echo $user->getFullName(); ?>
                    <div class="details"><?php echo $user->getDetails(); ?></div>
                </div>
            <?php } ?>

        </section>

        <!-- PRODUCTS SECT. -->
        <section class="products-section">
            <?php
            // Products Array
            $products = [];
            
            //Products Instances
            // Prod 1
            $prod1 = new Product('151', 'PlayStation 5');
            $prod1->setCreated('2020-04-09');
            try{
                $prod1->setPrice(499);
            } catch(Exception $e){
                echo 'Exception: ' . $e->getMessage();
            }
            $products[] = $prod1;

            // Prod 2
            $prod2 = new Clothing('202', 'Jeans', 'M');
            $prod2->setCreated('2019-20-12');
            try{
                $prod2->setPrice(49.90);
            } catch(Exception $e){
                echo 'Exception: ' . $e->getMessage();
            }
            $products[] = $prod2;

            // Prod 3
            $prod3 = new Food('332', 'Nutella', '600g');
            $prod3->setCreated('2020-07-07');
            try{
                $prod3->setPrice(13.10);
            } catch(Exception $e){
                echo 'Exception: ' . $e->getMessage();
            }
            $products[] = $prod3;

            // Prod 4
            $prod4 = new Food('311', 'Coffee', '500g');
            $prod4->setCreated('2020-01-11');
            try{
                $prod4->setPrice(6.50);
            } catch(Exception $e){
                echo 'Exception: ' . $e->getMessage();
            }
            $products[] = $prod4;

            // Prod 5
            $prod5 = new Product('102', 'Chair');
            $prod5->setCreated('2021-17-02');
            try{
                $prod5->setPrice(38.50);
            } catch(Exception $e){
                echo 'Exception: ' . $e->getMessage();
            }
            $products[] = $prod5;

            // Prod 6
            $prod6 = new Product('181', 'Washing Machine');
            $prod6->setCreated('2021-15-04');
            try{
                $prod6->setPrice(749);
            } catch(Exception $e){
                echo 'Exception: ' . $e->getMessage();
            }
            $products[] = $prod6;

            // Prod 7
            $prod7 = new Clothing('287', 'Sweater', 'XL');
            $prod7->setCreated('2021-18-05');
            try{
                $prod7->setPrice(6.50);
            } catch(Exception $e){
                echo 'Exception: ' . $e->getMessage();
            }
            $products[] = $prod7;

            // Prod 8
            $prod8 = new Food('374', 'Raw Ham', '5Kg');
            $prod8->setCreated('2020-20-03');
            try{
                $prod8->setPrice(94.80);
            } catch(Exception $e){
                echo 'Exception: ' . $e->getMessage();
            }
            $products[] = $prod8;

            // Print Products
            foreach($products as $product) {
                if(property_exists($product, 'type')){
                    if($product->getType() === 'food') {?>
                        <div class="card food">
                            <div><?php echo $product->getAllInformation(); ?></div>
                        </div>
                    <?php } elseif($product->getType() === 'clothing') { ?>
                        <div class="card clothing">
                            <div><?php echo $product->getAllInformation(); ?></div>
                        </div>
                    <?php }
                } else { ?>
                    <div class="card">
                        <div><?php echo $product->getAllInformation(); ?></div>
                    </div>
                <?php }
            } ?>
        </section>
        
        <!-- LEGEND SECTION -->
        <section class="legend"><strong>Legend:</strong>
            <div class="legend-item">
                <div class="square"></div>
                Generic Product
            </div>
            <div class="legend-item">
                <div class="square green"></div>
                Food Product
            </div>
            <div class="legend-item">
                <div class="square red"></div>
                Clothing Product
            </div>
        </section>
    </main>
</body>
</html>