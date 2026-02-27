<!DOCTYPE html>
<html>

<head>
    <title>Formulaire PHP</title>
</head>

<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = $_POST["nom"];
        echo "<h2>Bonjour $nom !</h2>";
    }
    ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="nom">Votre nom :</label>
        <input type="text" name="nom" id="nom" required>
        <button type="submit">Envoyer</button>
    </form>

</body>

</html>