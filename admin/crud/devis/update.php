<?php
require_once '../../../model/database.php';

$id = $_GET["id"];
$devis = getOneEntity("devis", $id);

require_once '../../layout/header.php';
?>

    <h1>Modifier destination</h1>
<!-- Formulaire de validation d'un devis -->
    <form action="update_query.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="valid">Validation</label>
            <input type="checkbox" id="valid" name="valid" class="form-control" value="1">
            <input type="hidden" name="user_id" value="<?php echo $devis["user_id"]; ?>">
            <input type="hidden" name="trek_id" value="<?php echo $devis["trek_id"]; ?>">
        </div>
        
        <!-- Envoi de la validation en BDD -->
        <button type="submit" class="btn btn-success">
            <i class="fa fa-save"></i> Enregistrer</button>
    </form>

    <?php
    require_once '../../layout/footer.php';
?>