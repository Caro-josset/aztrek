<?php
    require_once '../../layout/header.php';
?>

<h1>Nouvelle destination</h1>

<form action="create_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Pays</label>
        <input type="text" id="title" name="title" class="form-control">
    </div>
    <div class="form-group">
        <label for="desctiption">Description</label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
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