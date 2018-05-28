<?php 
    require_once '../../../model/database.php';
    require_once '../../layout/header.php';
    
    $list_members = getAllMembers();
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
        <?php foreach ($list_members as $member) : ?>
            <tr>
                <td><?php echo $member["lastname"];?></td>
                <td><?php echo $member["firstname"];?></td>
                <?php $picture = (!empty($member["picture"])) ? "../../../uploads/" . $member["picture"] : "http://via.placeholder.com/150x150"; ?>
                <td><img src="<?php echo $picture;?>" class="img-thumbnail" alt=""></td>
                <td>
                    <a href="update.php?id=<?php echo $member["id"];?>" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                    <a href="delete_query.php?id=<?php echo $member["id"];?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>    
                </td>
            </tr>
        <?php endforeach ;?>
    </tbody>
</table>

<?php require_once '../../layout/footer.php';?>