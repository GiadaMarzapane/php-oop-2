<?php
require_once __DIR__ . './categoria.php';
require_once __DIR__.'./prodotti.php';
require_once __DIR__ . './cibo.php';
require_once __DIR__ . './giochi.php';
require_once __DIR__ . './cucce.php';

$categoriaCani= new Categoria('Cani', '&#128054;');
$categoriaGatti = new Categoria('Gatti', '&#128049;');

$ProdottiCibo = [];

$ProdottiCibo[] = new Cibo(
    $categoriaCani,
    'Natural Trainer Puppy&Junior Mini con Pollo',
    25.90,
    true,
    'https://arcaplanet.vtexassets.com/arquivos/ids/253221/PUPPY-JUNIOR-7KG.jpg?v=1764600297',
    'Secco',
    'Junior',
    'Pollo e Riso',
    7000
);
$ProdottiCibo[] = new Cibo(
    $categoriaCani,
    'Monge Mini Adult con Salmone',
    16.50,
    true,
    'https://arcaplanet.vtexassets.com/arquivos/ids/270787/Monge-Mini-Adult-con-Salmone-2.5kg.jpg?v=1764599757',
    'Secco',
    'Adult',
    'Salmone e Riso',
    2500
);
$ProdottiCibo[] = new Cibo(
    $categoriaCani,
    'Monge SOLO Lattina',
    2.99,
    false,
    'https://arcaplanet.vtexassets.com/arquivos/ids/243843/monge-monoproteico-cane-pate-solo-agnello.jpg?v=1764598516',
    'Umido',
    'Tutte le età',
    'Agnello',
    400
);

$ProdottiCibo[] = new Cibo(
    $categoriaGatti,
    'Monge Sterilised Trota per Gatto',
    59.99,
    true,
    'https://arcaplanet.vtexassets.com/arquivos/ids/264207/monge-cat-trota-10kg.jpg?v=1764598882',
    'Secco',
    'Adult',
    'Trota',
    10000
);
$ProdottiCibo[] = new Cibo(
    $categoriaGatti,
    'Natural Trainer Kitten al Pollo',
    14.49,
    true,
    'https://arcaplanet.vtexassets.com/arquivos/ids/248346/trainer-natural-kitten-pollo.jpg?v=1764588457',
    'Secco',
    'Kitten',
    'Pollo',
    1500
);
$ProdottiCibo[] = new Cibo(
    $categoriaGatti,
    'Royal Canin V-Diet Gastrointestinal Multipack Gatto (12x85g)',
    15.99,
    true,
    'https://arcaplanet.vtexassets.com/arquivos/ids/208630/Royal-Canin-Cat-V-Diet-Gastrointestinal-mpack-12x85g.jpg?v=1764597181',
    'Umido',
    'Tutte le età',
    'Misto',
    85
);

$ProdottiGiochi = [];

$ProdottiGiochi[] = new Giochi(
    $categoriaCani,
    'KONG Wild Knots Bears',
    21.40,
    true,
    'https://arcaplanet.vtexassets.com/arquivos/ids/240642/kong-cane-wild-knots-bears.jpg?v=1764551523',
    'Peluche'
);
$ProdottiGiochi[] = new Giochi(
    $categoriaCani,
    'KONG Porta Biscotto Goodie Bone',
    19.25,
    true,
    'https://arcaplanet.vtexassets.com/arquivos/ids/272837/kong-bone-large-goodie-bone-porta-biscotto.jpg?v=1764465135',
    'Gomma'
);
$ProdottiGiochi[] = new Giochi(
    $categoriaGatti,
    'Tiragraffi Federico Grigio',
    169,
    true,
    'https://arcaplanet.vtexassets.com/arquivos/ids/265811/185001_PHO_PRO_CAT_CLIP_44428-1.jpg?v=1764551593',
    'Fodera in peluche e tronchetti rivestiti in juta'
);
$ProdottiGiochi[] = new Giochi(
    $categoriaGatti,
    'Camon Gioco Topino Peluche Coda Corda',
    14.99,
    false,
    'https://arcaplanet.vtexassets.com/arquivos/ids/223638/camon-gatto-gioco-topino-peluche-coda-corda.jpg?v=1763987788',
    'Peluche'
);

$ProdottiCucce = [];

$ProdottiCucce[] = new Cucce(
    $categoriaCani,
    'Cuccia Ovale Morbida Tartan',
    35.99,
    true,
    'https://arcaplanet.vtexassets.com/arquivos/ids/225142/merci-cane-cuccia-ovale-morbida-tartan.jpg?v=1764292413',
    'Imbottito',
    50
);
$ProdottiCucce[] = new Cucce(
    $categoriaGatti,
    'Cuccia Ciambella Pelosa Beige',
    24.99,
    true,
    'https://arcaplanet.vtexassets.com/arquivos/ids/277242/luna-e-teo-cuccia-pelosa-color-beige.jpg?v=1764551829',
    'Imbottito',
    60
);