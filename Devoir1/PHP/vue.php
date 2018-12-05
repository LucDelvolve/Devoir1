<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Devoir Pizza</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../JQuery/jquery-3.1.1.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="../CSS/styles.css"/>
    <script src="../JS/fonctions.js"></script>
    <script type="text/javascript"></script>
</head>
<body>
    <?php
        include 'cnx.php';
        $sql = $cnx->prepare("select refCde,refPizza,qte from lignescommandes");
        $sql->execute();
        foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $uneLigneCmd)
        {
            echo "<div class='divligneCmd'>";
                    echo "<h5>".$uneLigneCmd['refCde']."</h5>";
                    echo "<h5>".$uneLigneCmd['refPizza']."</h5>";
                    echo "<em>".$uneLigneCmd['qte']."</em>";
                echo "</div>";
        }
    ?>
    <div id="divCommandes"></div>
    <div id="divPizzas"></div>

    <select name="Livreur" id="livreur">
                        <option value="1">AURADE</option>
                        <option value="2">CHAMPEX</option>
                        <option value="3">COMBIN</option>
                        <option value="4">MERVILLE</option>
    </select>

    <select name="Client" id="client">
                        <option value="1">GALMIER</option>
                        <option value="2">GAND</option>
                        <option value="3">MAUPAS</option>
                        <option value="4">NEYRAC</option>
                        <option value="5">MULLER</option>
    </select>

    <div class="slidecontainer">
        <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
    </div>
    <tr>
        <td>Nom pizza</td>
        <td>Nombre de personnes</td>
        <td>Prix</td>
        <td>Quantité</td>

    </tr>
</body>
</html>