<?php
    // TEMPLATE ACCUEIL CONNEXION
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/styles.css">
        <title>Accueil</title>
    </head>
    <body>
        <canvas id="backgroundCanvas"></canvas>
        <header>
        </header>
        <main>
            <div class="container">
                <div class="title">
                    <h1>interface administation</h1>
                </div>
                <div class="connection">
                    <p>Connexion</p>
                    <form action="" method="post">
                        <label>Login</label>
                        <input type="text" name="login" placeholder="Votre login">
                        <label>Mot de passe</label>
                        <input type="password" name="password" placeholder="Mot de passe">
                        <div class="cta">
                            <button type="submit">Se connecter</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <footer>
        </footer>
    </body>
    <script src="js/script.js"></script>
</html>