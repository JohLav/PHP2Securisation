<!-- https://openclassrooms.com/en/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913099-administrez-des-formulaires-de-facon-securisee -->

<?php
// define variables and set to empty values
$lastname = $firstname = $email = $tel = $message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $lastname = test_input($_POST["lastname"]);
  $firstname = test_input($_POST["firstname"]);
  $email = test_input($_POST["email"]);
  $tel = test_input($_POST["tel"]);
  $message = test_input($_POST["message"]);
}

function test_input($data): string
{
  $data = trim($data);
  $data = stripslashes($data);
    return htmlspecialchars($data);
}

// define variables and set to empty values
$lastnameErr = $firstnameErr = $emailErr = $telErr = $subjectErr = $messageErr = "";
$lastname = $firstname = $email = $tel = $subject = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["lastname"])) {
        $lastnameErr = "Veuillez renseigner votre nom.";
    } else {
        $lastname = test_input($_POST["lastname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $lastname)) {
            $lastnameErr = "Veuillez saisir uniquement des lettres et des espaces.";
        }

        if (empty($_POST["firstname"])) {
            $firstnameErr = "Veuillez renseigner votre prénom.";
        } else {
            $firstname = test_input($_POST["firstname"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $firstname)) {
                $firstnameErr = "Veuillez saisir uniquement des lettres et des espaces.";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Veuillez saisir votre email.";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Le format email n'est pas valide.";
            }
        }

        if (empty($_POST["tel"])) {
            $telErr = "Veuillez saisir votre numéro de téléphone.";
        } else {
            $tel = test_input($_POST["tel"]);
        }

        if (empty($_POST["subject"])) {
            $subjectErr = "Veuillez préciser le sujet";
        } else {
            $subject = test_input($_POST["subject"]);
        }

        if (empty($_POST["message"])) {
            $messageErr = "Veuillez saisir votre message.";
        } else {
            $message = test_input($_POST["message"]);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Message envoyé</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div class="container">
    <h1>Votre message a bien été envoyé !</h1>
    <p>
        <?php echo 'Merci' . $_POST['firstname'] . ' ' . $_POST['lastname'] .
            ' de nous avoir contacté à propos ' . $_POST['subject'] .
            '. L\'un de nos conseillers prendra contact avec vous dans les plus brefs
                délais pour traiter votre demande à l\'adresse ' . $_POST['email'] .
            ' ou par téléphone au ' . $_POST['tel'] . '<br>' . '<br>' .
            'Pour rappel, voici votre message :' . '<br>' . $_POST['message']; ?>
    </p>
</div>
</body>

</html>