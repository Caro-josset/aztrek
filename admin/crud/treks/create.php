<?php
    require_once '../../layout/header.php';

    $list_destinations = getAllDestinations();
    $list_niveaux = getAllNiveaux();
?>

<h1>Nouveau trek</h1>

<!-- Formulaire de création d'un trek -->
<form action="create_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="pays">Pays</label>
        <!-- Liste déroulante pays -->
        <select name="destination_id" id="pays" class="form-control">
            <?php foreach ($list_destinations as $destination):?>
                <option value="<?php echo $destination["id"]?>"><?php echo $destination["title"]?></option>
            <?php endforeach ;?>
        </select>
    </div>
    <div class="form-group">
        <label for="title">Titre</label>
        <input type="text" id="title" name="title" class="form-control">
    </div>
    <div class="form-group">
        <label for="price">Prix</label>
        <input type="number" id="price" name="price" class="form-control">
    </div>
    <div class="form-group">
        <label for="desctiption">Description</label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <!-- Liste déroulante niveux -->
        <label for="niveau">Niveau</label>
        <select name="niveau_id" id="niveau" class="form-control">
            <?php foreach ($list_niveaux as $niveau):?>
                <option value="<?php echo $niveau["id"]?>"><?php echo $niveau["label"]?></option>
            <?php endforeach ;?>
        </select>
    </div>
    <div class="form-group">
        <label for="en_avant">Mise en avant</label>
        <input type="checkbox" id="en_avant" name="en_avant" class="form-control" value"1">
    </div>
    <div class="form-group">
        <label for="picture">Photo</label>
        <input type="file" id="picture" name="picture" class="form-control" accept="image/*">
    </div>
    <!-- Envoi du formulaire en BDD -->
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>
</form>

<?php
    require_once '../../layout/footer.php';
?>