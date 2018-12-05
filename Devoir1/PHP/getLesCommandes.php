<?php
include 'cnx.php';
$sql = $cnx->prepare("select * from commandes, clients, livreurs where commandes.numCli = clients.numCli and commandes.numLiv = livreurs.numLiv");
$sql->execute();
foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $uneCommande)
{
    echo "<div class='divUneCommande'>";
        echo "<h5>".$uneCommande['numCde']."</h5>";
        echo "<em>".$uneCommande['numCli']."</em>";
        echo "<em>".$uneCommande['numLiv']."</em>";
    echo "</div>";
}

?>