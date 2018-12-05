<?php
include 'cnx.php';
$sql = $cnx->prepare("select * from pizzas, lignescommandes where numPizza = refPizza");
$sql->execute();
foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $unePizza)
{
    echo "<div class='divUnePizza'>";
        echo "<h5>".$unePizza['numPiz']."</h5>";
        echo "<em>".$unClient['nomPiz']."</em>";
        echo "<em>".$unClient['nbPers']."</em>";
        echo "<em>".$unClient['prix']."</em>";
    echo "</div>";
}

?>