<?php 
    require_once '../../../model/database.php';
    require_once '../../layout/header.php';
    
    $list_devis = getAllDevis();
    // debug($list_devis);
?>

<h1>Gestion des devis</h1>

<!-- En-tête du tableau -->
<table class="table">
    <thead class="thead-dark">
        <th>Numéro devis</th>
        <th>Nombre de personnes</th>
        <th>Date de départ</th>
        <th>Fléxibilité</th>
        <th>Description</th>
        <th>Trek</th>
        <th>User</th>
        <th>Statut</th>
    </thead>
    <!-- Affichage dynamique des données des devis -->
    <tbody>
        <?php foreach ($list_devis as $devis) :?>
            <tr>
                <td><?php echo $devis["id"];?></td>
                <td><?php echo $devis["nb_pers"];?></td>
                <td><?php echo $devis["date_start"];?></td>
                <?php if (isset($devis["id"]) & ($devis["id"] == 1)) :?>
                <td>Oui</td>
                <?php else :?>
                <td>Non</td>
                <?php endif ;?></td>
                <td><?php echo $devis["description"];?></td>
                <td><?php echo $devis["trek"];?></td>
                <td><?php echo $devis["user"];?></td>
                <?php if (isset($devis["valid"]) & ($devis["valid"] == 1)) :?>
                <td>Oui</td>
                <?php else :?>
                <td>Non</td>
                <?php endif ;?></td>
                <td>
                    <!-- Valider un devis côté admin - !A revoir -->
                    <a href="update.php?id=<?php echo $devis["id"];?>" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                    <!-- Supprimer un devis -->
                    <a href="delete_query.php?id=<?php echo $devis["id"];?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>    
                </td>
            </tr>
        <?php endforeach ;?>
    </tbody>
</table>

<?php require_once '../../layout/footer.php';?>