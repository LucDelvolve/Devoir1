<?php
include 'cnx.php';
$sql = $cnx->prepare("select * from clients, commandes where clients.numCli = commandes.numCli");
$sql->execute();
foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $unClient)
{
    echo "<div class='divUnClient'>";
        echo "<h5>".$unClient['numCli']."</h5>";
        echo "<em>".$unClient['nomCli']."</em>";
    echo "</div>";
}

?>