<?php
include 'cnx.php';
$sql = $cnx->prepare("select * from livreurs, commandes where livreurs.numLiv = commandes.numLiv");
$sql->execute();
foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $unLivreur)
{
    echo "<div class='divUnLivreur'>";
        echo "<h5>".$unClient['numLiv']."</h5>";
        echo "<em>".$unClient['nomLiv']."</em>";
    echo "</div>";
}

?>