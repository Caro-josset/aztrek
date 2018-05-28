<?php
require_once '../../../model/database.php';

$id = $_GET["id"];
$member = getOneEntity("member", $id);

require_once '../../layout/header.php';
?>

<h1>Modifier membre</h1>

<form action="update_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="lastname">Nom</label>
        <input type="text" id="lastname" name="lastname" class="form-control" value="<?php echo $member["lastname"]?>">
    </div>
    <div class="form-group">
        <label for="firstname">Prénom</label>
        <input type="text" id="firstname" name="firstname" class="form-control" value="<?php echo $member["firstname"]?>">
    </div>
    <div class="form-group">
        <label for="picture">Photo</label>
        <input type="file" id="picture" name="picture" class="form-control" accept="image/*">
        <?php if(!empty($member["picture"])) : ?>
            <img src="../../../uploads/<?php echo $member["picture"]; ?>" class="img-thumbnail">
        <?php endif ;?>
    </div>
    <input type="hidden" name="id" value="<?php echo $member["id"]; ?>">
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>
</form>

<?php
    require_once '../../layout/footer.php';
?>