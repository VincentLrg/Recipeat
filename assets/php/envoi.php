<?php
session_start();
    $errors = array();
    if (!array_key_exists('nom', $_POST) || $_POST['nom'] == '')
        $errors['nom'] = "Veuillez renseigner un nom valide.";
    if (array_key_exists('nom', $_POST) && strlen($_POST['nom']) > 35)
        $errors['name'] = "Votre nom ne doit pas dépasser 35 caractères.";
    if (!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
        $errors['email'] = "Veuillez renseigner un e-mail valide.";
    if (!array_key_exists('objet', $_POST) || $_POST['objet'] == '')
        $errors['sujet'] = "Veuillez renseigner un sujet valide.";
    if (array_key_exists('objet', $_POST) && strlen($_POST['objet']) > 55)
        $errors['sujet'] = "Votre sujet ne doit pas dépasser 55 caractères.";
    if (!array_key_exists('message', $_POST) || $_POST['message'] == '')
        $errors['message'] = "Veuillez renseigner un message valide.";
    if (!empty($errors))
    {
        $_SESSION['errors'] = $errors;
        $_SESSION['inputs'] = $_POST;
        header('Location: ../../contact.php');
    }
    else
    {
        $_SESSION['success'] = 1;
        $name = $_POST['nom'];
        $email = $_POST['email'];
        $headers .= "From: " . $name . "<" . $email . ">" . "\r\n";
        $message = $_POST["message"];
        $subject = $_POST['objet'];
        $dest = 'recip.eat@outlook.fr';
        mail($dest, $subject, utf8_decode($message), $headers);
        header('Location: ../../contact.php');
    }
?>
