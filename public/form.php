<?php
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // nettoyage et validation des données soumises via le formulaire
    if (!isset($_POST['firstname']) || trim($_POST['firstname']) === '')
        $errors[] = "Veuillez renseigner votre prénom";
    if (!isset($_POST['lastname']) || trim($_POST['lastname']) === '')
        $errors[] = "Veuillez saisir votre nom";
    if (!isset($_POST['email']) || trim($_POST['email']) === '')
        $errors[] = "Veuillez saisir votre email";
    if (!isset($_POST['tel']) || trim($_POST['tel']) === '')
        $errors[] = "Veuillez saisir votre numéro de téléphone";
    // if (!isset($_POST['subject']) || trim($_POST['subject']) === '')
    //     $errors[] = "Veuillez préciser le sujet";
    if (!isset($_POST['message']) || trim($_POST['message']) === '')
        $errors[] = "Veuillez saisir votre message";
    if (empty($errors)) {
        // traitement du formulaire
        // puis redirection
        header('Location: thanks.php');
    }
} ?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Avis formation</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<br>

<?php // Affichage des éventuelles erreurs
if (count($errors) > 0): ?>
    <div>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li>
                    <?= $error ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<form method="POST" action="">
    <h1>Avis formation Back-End</h1>
    <section>
        <h2>Contact information</h2>
        <p>
            <label for="lastname">Nom :</label>
            <input type="text" name="lastname" id="lastname" required>
        </p>
        <p class="row">
            <label for="firstname">Prénom :</label>
            <input type="text" name="firstname" id="firstname" required>
        </p>
        <p class="row">
            <label for="email">E-mail :</label>
            <input type="email" name="email" id="email" required>
        </p>
        <p class="row">
            <label for="tel">Téléphone :</label>
            <input type="tel" name="tel" id="tel" required>
        </p>
        <p class="row">
            <label for="subject">Sujet :</label>
            <select name="subject" id="subject">
                <option value="">--Choisi un sujet--</option>
                <option value="de la connexion Wi-Fi">Connexion Wi-Fi</option>
                <option value="de la durée de formation">Durée de formation</option>
                <option value="du contenu des quêtes">Contenu des quêtes</option>
            </select>
        </p>
        <p class="row">
            <label for="message">Message :</label>
            <textarea id="message" name="message" required></textarea>
        </p>
        <br>
        <p class="button">
            <button type="submit" value="Send Request">Envoyer</button>
        </p>
    </section>
</form>

</body>

</html>