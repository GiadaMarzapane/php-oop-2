<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once __DIR__ . '/models/categoria.php';
require_once __DIR__ . '/models/prodotti.php';
require_once __DIR__ . '/models/cibo.php';
require_once __DIR__ . '/models/giochi.php';
require_once __DIR__ . '/models/cucce.php';
require_once __DIR__ . '/models/database.php';

// var_dump($ProdottiCibo);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>PHP OOP 2 - E-Commerce Animali</title>

</head>

<body>
    <main class="p-4">
        <!-- PRODOTTI CIBO -->
        <h2>Cibo per Animali</h2>
        <div class="d-flex flex-wrap w-75 m-auto">
            <?php
            foreach ($ProdottiCibo as $element) {
            ?>
                <div class="card me-2 mb-4" style="width: 18rem;">
                    <h5 class="text-center border-bottom py-2">
                        Prodotto per
                        <?php echo $element->categoria->nome ?>
                        <?php echo $element->categoria->icona ?>
                    </h5>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $element->nome_prodotto ?></h5>
                        <img class="img-fluid" src="<?php echo $element->img_path ?>" class="card-img-top" alt="...">
                        <p class="mb-0">Tipo prodotto: <?php echo $element->tipo ?></p>
                        <p class="mb-0">Gusto <?php echo $element->gusto ?></p>
                        <p class="mb-1">Adatto per età: <?php echo $element->eta ?></p>
                        <p class="mb-0">Quantità: <?php echo $element->peso_prodotto ?> grammi</p>
                        <p class="mb-1"> Prezzo: € <?php echo $element->prezzo ?></p>
                        <p class="card-text"><?php echo ($element->disponibilita) ? 'Prodotto disponibile' : 'Prodotto non disponibile' ?></p>
                        <a href="#" class="btn btn-success">Acquista</a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <!-- PRODOTTI GIOCHI -->
        <h2>Giochi per Animali</h2>
        <div class="d-flex flex-wrap w-75 m-auto">
            <?php
            foreach ($ProdottiGiochi as $element) {
            ?>
                <div class="card me-2 mb-4" style="width: 18rem;">
                    <h5 class="text-center border-bottom py-2">
                        Prodotto per
                        <?php echo $element->categoria->nome ?>
                        <?php echo $element->categoria->icona ?>
                    </h5>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $element->nome_prodotto ?></h5>
                        <img class="img-fluid" src="<?php echo $element->img_path ?>" class="card-img-top" alt="...">
                        <p class="mb-0">Materiale prodotto: <?php echo $element->materiale ?></p>
                        <p class="mb-1"> Prezzo: € <?php echo $element->prezzo ?></p>
                        <p class="card-text"><?php echo ($element->disponibilita) ? 'Prodotto disponibile' : 'Prodotto non disponibile' ?></p>
                        <a href="#" class="btn btn-success">Acquista</a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <!-- PRODOTTI CUCCE -->
        <h2>Cucce per Animali</h2>
        <div class="d-flex flex-wrap w-75 m-auto">
            <?php
            foreach ($ProdottiCucce as $element) {
            ?>
                <div class="card me-2 mb-4" style="width: 18rem;">
                    <h5 class="text-center border-bottom py-2">
                        Prodotto per
                        <?php echo $element->categoria->nome ?>
                        <?php echo $element->categoria->icona ?>
                    </h5>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $element->nome_prodotto ?></h5>
                        <img class="img-fluid" src="<?php echo $element->img_path ?>" class="card-img-top" alt="...">
                        <p class="mb-0">Materiale prodotto: <?php echo $element->materiale ?></p>
                        <p class="mb-0">Diametro: <?php echo $element->forma ?> cm</p>
                        <p class="mb-1"> Prezzo: € <?php echo $element->prezzo ?></p>
                        <p class="card-text"><?php echo ($element->disponibilita) ? 'Prodotto disponibile' : 'Prodotto non disponibile' ?></p>
                        <a href="#" class="btn btn-success">Acquista</a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </main>
</body>

</html>