<!DOCTYPE html>
<?php
require_once __DIR__ . '/Models/Category.php';
//include all products
require_once __DIR__ . '/Models/Partials/Accessories.php';
require_once __DIR__ . '/Models/Partials/Food.php';
require_once __DIR__ . '/Models/Partials/Toys.php';

//create animal categories
$cat = new Category('cat');
$dog = new Category('dog');
$bird = new Category('bird');
$fish = new Category('fish');

// create products
try {
    $royal_canin = new Food('01', 'Royal Canin Adult', 44, 'img/royal.jpg', $dog, 500);
    $almo_naturer = new Food('02', 'almo Nature Holistic', 45, 'img/almo.jpg', $cat, 70);
    $voliera = new Accessories('03', 'Voliera Wilma', 185, 'img/voliera.webp', $bird, 'Legno');
    $acquario = new Accessories('04', 'Acquario Oase', 1900, 'img/acquario.png', $fish, "Vetro , Acciaio");
    $osso = new Toys('05', 'Osso Giocattolo', 12, 'img/osso.jpg', $dog, 'Rimbalza');
    $topo = new Toys('06', 'Topo giocattolo', 8, 'img/topo.png', $cat, 'Peoloso');
    $cartucce = new Accessories('07', 'Cartucce filtro acquario', 5, 'img/filtro.jpg', $fish, 'Plastica');
    $mangime = new Food('08', 'Mangime Vitakraft', 18, 'img/mangime.jpg', $bird, 500);

    $prd_list = [$royal_canin, $almo_naturer, $voliera, $acquario, $osso, $topo, $cartucce, $mangime];
    //var_dump($prd_list);
} catch (Exception $e) {
    echo $e->getMessage();
    die;
}





?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolshop</title>
    <!-- fa -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <div class="container-xl">
        <h1>Products:</h1>
        <div class="container-fluid p-0">
            <h3>I nostri Prodotti:</h3>
            <div class="row">
                <?php foreach ($prd_list as $prd) : ?>
                    <!-- <?php
                            var_dump($prd);
                            ?> -->
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src=<?php echo $prd->get_img() ?> class="card-img-top ">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><?php echo $prd->get_category()->get_icon() . ' ' . $prd->get_category()->get_name() ?></li>
                                <li class="list-group-item"><?php echo $prd->get_name()  ?></li>
                                <li class="list-group-item"><?php echo $prd->get_price() . '£'  ?></li>
                                <?php if (method_exists($prd, 'get_specs')) : ?>
                                    <li class="list-group-item"><?php echo $prd->get_specs() ?></li>

                                <?php endif; ?>
                                <?php if (method_exists($prd, 'get_materials')) : ?>
                                    <li class="list-group-item"><?php echo $prd->get_materials() ?></li>

                                <?php endif; ?>
                                <?php if (method_exists($prd, 'get_grams')) : ?>
                                    <li class="list-group-item"><?php echo $prd->get_grams() ?></li>

                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>

</body>

</html>