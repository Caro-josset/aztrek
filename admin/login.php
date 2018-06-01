<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sigin.css">
</head>
<body class="text-center">

<!-- formulaire de connexion -->
        <form class="form-signin" action="index.php" method="post">
            <h1 class="h3 mb-3 font-weight-normal">Login</h1>
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
            <label for="inputPassword" class="sr-only">Mot de passe</label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Se souvenir de moi
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        <!-- Lien vers la création d'un compte -->
            <a href="users/index.php" class="btn btn-lg btn-primary btn-block">Créer mon compte</a>
        </form>
</body>
</html>