<?php
require_once '../../../model/database.php';

$id = $_GET["id"];
$trek = getOneEntity("trek", $id);
$list_niveaux = getAllNiveaux();
$list_destinations = getAllDestinations();

require_once '../../layout/header.php';
?>

    <h1>Modifier trek</h1>

    <form action="create_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="pays">Pays</label>
        <select name="destination_id" id="pays" class="form-control">
            <?php foreach ($list_destinations as $destination):?>
                <option value="<?php echo $destination["id"]?>"><?php echo $destination["title"]?></option>
            <?php endforeach ;?>
        </select>
    </div>
    <div class="form-group">
        <label for="title">Titre</label>
        <input type="text" id="title" name="title" class="form-control" value="<?php echo $trek["title"]?>">
    </div>
    <div class="form-group">
        <label for="price">Prix</label>
        <input type="number" id="price" name="price" class="form-control" value="<?php echo $trek["price"]?>">
    </div>
    <div class="form-group">
        <label for="desctiption">Description</label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control"><?php echo $trek["description"]?></textarea>
    </div>
    <div class="form-group">
        <label for="niveau">Niveau</label>
        <select name="niveau_id" id="niveau" class="form-control">
            <?php foreach ($list_niveaux as $niveau):?>
                <option value="<?php echo $niveau["id"]?>"><?php echo $niveau["label"]?></option>
            <?php endforeach ;?>
        </select>
    </div>
    <div class="form-group">
        <label for="en_avant">Mise en avant</label>
        <input type="checkbox" id="en_avant" name="en_avant" class="form-control">
    </div>
    <div class="form-group">
        <label for="picture">Photo</label>
        <input type="file" id="picture" name="picture" class="form-control" accept="image/*">
    </div>
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>
</form>

    <?php
    require_once '../../layout/footer.php';
?>