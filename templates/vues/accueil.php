<?php
    // TEMPLATE ACCUEIL CONNEXION
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../assets/css/styles.css">
        <title>Monitoring</title>
    </head>
    <body>
        <!-- Background JS -->
        <canvas id="backgroundCanvas"></canvas>
        <header>
            <div class="title">
                <a href="#" title="Monitoring d'administration">Monitoring</a>
            </div>
        </header>
        <main>
            <div class="container">
                <div class="connection">
                    <p>Connexion</p>
                    <form action="" method="post">
                        <label>Login</label>
                        <input type="text" name="login" placeholder="Votre login">
                        <label>Mot de passe</label>
                        <input type="password" name="password" placeholder="Mot de passe">
                    </form>
                </div>
            </div>
        </main>
        <footer>
        </footer>
    </body>
    <script src="js/script.js"></script>
</html>