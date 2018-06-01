<?php
require_once '../../../model/database.php';

$id = $_GET["id"];
$destination = getOneEntity("destination", $id);

require_once '../../layout/header.php';
?>

    <h1>Modifier destination</h1>
<!-- Formulaire de modification d'une destination -->
    <form action="update_query.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Pays</label>
            <input type="text" id="title" name="title" class="form-control" value="<?php echo $destination["title"]; ?>">
        </div>
        <div class="form-group">
            <label for="desctiption">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control"><?php echo $destination["description"]; ?></textarea>
        </div>
        <div class="form-group">
            <label for="picture">Photo</label>
            <input type="file" id="picture" name="picture" class="form-control" accept="image/*">
            <?php if(!empty($destination["picture"])) : ?>
            <img src="../../../uploads/<?php echo $destination["picture"]; ?>" class="img-thumbnail">
            <?php endif ;?>
        </div>
        <input type="hidden" name="id" value="<?php echo $destination["id"]; ?>">
        <!-- Envoi des modifications en BDD -->
        <button type="submit" class="btn btn-success">
            <i class="fa fa-save"></i> Enregistrer</button>
    </form>

    <?php
    require_once '../../layout/footer.php';
?>