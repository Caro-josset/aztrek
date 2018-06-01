<?php 
    require_once '../../../model/database.php';
    require_once '../../layout/header.php';
    
    $list_treks = getAllTreks();
?>

<h1>Gestion des treks</h1>

<a href="create.php" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Ajouter</a>

<!-- En-tête du tableau -->
<table class="table">
    <thead class="thead-dark">
        <th>Pays</th>
        <th>Titre</th>
        <th>Prix</th>
        <th>Description</th>
        <th>Niveau</th>
        <th>Mise en avant</th>
        <th>Photos</th>
        <th>Actions</th>
    </thead>
     <!-- Affichage dynamique des données d'un trek -->
    <tbody>
        <?php foreach ($list_treks as $trek) : ?>
            <tr>
                <td><?php echo $trek["pays"];?></td>
                <td><?php echo $trek["title"];?></td>
                <td><?php echo $trek["price"];?></td>
                <td><?php echo $trek["description"];?></td>
                <td><?php echo $trek["niveau"];?></td>
                <td><?php echo $trek["en_avant"];?></td>
                <?php $picture = (!empty($trek["picture"])) ? "../../../uploads/" . $trek["picture"] : "http://via.placeholder.com/150x150"; ?>
                <td><img src="<?php echo $picture;?>" class="img-thumbnail" alt=""></td>
                <td>
                    <!-- Modifier les données d'une destination -->
                    <a href="update.php?id=<?php echo $trek["id"];?>" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                    <!-- Supprimer un trek -->
                    <a href="delete_query.php?id=<?php echo $trek["id"];?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>    
                </td>
            </tr>
        <?php endforeach ;?>
    </tbody>
</table>

<?php require_once '../../layout/footer.php';?>