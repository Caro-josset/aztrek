<?php 
    require_once 'library/functions.php';
    require_once 'model/database.php';

// Définition des variables
    $user = currentUser();
    $id = $user["id"];

// Récupération du header
    getHeader("Mon compte");
?>

<h1>Mon espace trekker</h1>

<!-- affichage dynamique des données du profil user -->
<h2>Mon profil</h2>

 <table>
    <thead>
        <th>Pseudo</th>
        <th>Email</th>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Photo de profil</th>
        <th>Pays</th>
        <th>Ville</th>
        <th>Code postal</th>
        <th>Description</th>
        <th>Niveau de publication</th>
    </thead>
    <tbody>
            <tr>
                <td><?php echo $user["pseudo"];?></td>
                <td><?php echo $user["email"];?></td>
                <td><?php echo $user["firstname"];?></td>
                <td><?php echo $user["lastname"];?></td>
                <?php $picture = (!empty($user["picture"])) ? "../../../uploads/" . $user["picture"] : "http://via.placeholder.com/150x150"; ?>
                <td><img src="<?php echo $picture;?>" class="img-thumbnail" alt=""></td>
                <td><?php echo $user["country"];?></td>
                <td><?php echo $user["town"];?></td>
                <td><?php echo $user["postal_code"];?></td>
                <td><?php echo $user["about"];?></td>
                <td><?php echo $user["level_user_id"];?></td>
                <td>
                    <a href="update.php?id=<?php echo $destination["id"];?>" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                    <a href="delete_query.php?id=<?php echo $destination["id"];?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>    
                </td>
            </tr>
    </tbody>
</table>

<!-- affichage dynamique des stories liées au user -->
<h2>Mes stories</h2>

<!-- affichage dynamique des devis en cours -->
<h2>Mes devis en cours</h2>

<!-- récuperation du footer -->
<?php getFooter();