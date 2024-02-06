<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php require_once("db.php"); ?>

</head>    
<body>

    <h1> Vendesi prodotti per animali:</h1>

    <ul> <h3>Prodotto:</h3>

    <?php foreach([$prodotto1, $prodotto2, $prodotto3, $prodotto4] as $prodotto) { ?>

        <li>
            <?php 
                echo $prodotto -> getTitolo();
                echo '<br>';
                echo "Prezzo: {$prodotto -> getPrezzo()} € " ;
                echo '<br>';
                echo $prodotto -> getImmagine();
                echo '<br>';
                echo "Tipologia prodotto: {$prodotto -> getTipologia()} ";
                echo '<br>';
                echo $prodotto -> getCategoria() -> getNome(); 
                echo $prodotto -> getCategoria() -> getIcona(); 
                echo '<br>';
                echo $prodotto -> verificaDisponibilita();
            ?>
        </li>

        <br>

    <?php } ?>
    </ul>
</body>
</html>



