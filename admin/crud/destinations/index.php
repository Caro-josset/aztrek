<?php 
    require_once '../../../model/database.php';
    require_once '../../layout/header.php';
    
    $list_destinations = getAllDestinations();
?>

<h1>Gestion des destinations</h1>

<a href="create.php" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Ajouter</a>

<table class="table">
    <thead class="thead-dark">
        <th>Pays</th>
        <th>Description</th>
        <th>Photo</th>
        <th>Actions</th>
    </thead>
    <tbody>
        <?php foreach ($list_destinations as $destination) : ?>
            <tr>
                <td><?php echo $destination["title"];?></td>
                <td><?php echo $destination["description"];?></td>
                <?php $picture = (!empty($destination["picture"])) ? "../../../uploads/" . $destination["picture"] : "http://via.placeholder.com/150x150"; ?>
                <td><img src="<?php echo $picture;?>" class="img-thumbnail" alt=""></td>
                <td>
                    <a href="update.php?id=<?php echo $destination["id"];?>" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                    <a href="delete_query.php?id=<?php echo $destination["id"];?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>    
                </td>
            </tr>
        <?php endforeach ;?>
    </tbody>
</table>

<?php require_once '../../layout/footer.php';?>