<?php
session_start();
?>
<!doctype html>
<html lang="fr">

	<head>
		<meta charset="UTF-8">
		<title>Contact - Recip'Eat</title>
		<link rel="icon" type="image/png" href="assets/image/favicon.png" />
		<link rel="stylesheet" href="css/styleglobal.css">
    <link rel="stylesheet" href="css/stylefooteralt.css">
		<link rel="stylesheet" href="css/stylecontact.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	</head>

	<body>
		<div class="header">
			<div id="logo">
				<a href="index.html"><img src="assets/image/logo_vert.png"></img></a>
			</div>
			<div id="menu">
				<a href="index.html">Accueil</a>
				<a href="galerie.html">Galerie</a>
				<a href="apropos.html">A propos</a>
				<a href="contact.php">Contact</a>
			</div>
		</div>
		<div class="contact">
			<h2> Une idée, une question?</h2>
			<h1> Contactez-nous!</h1>
			<?php if (array_key_exists('errors', $_SESSION)):?>
					<div id="errors">
					 <?= implode('</br>', $_SESSION['errors']);?>
			 </div>
	 <?php endif;?>
	 <?php if (array_key_exists('success', $_SESSION)):?>
			<div id="success">
					Votre message a bien été envoyé.
			</div>
	<?php endif;?>
		</div>
		<div class="form">
			<form action="assets/php/envoi.php" method="post">
					<div id="input">
						<input type="text" id="nom" name="nom" tabindex="1" placeholder="NOM" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>"/>
						<input type="text" id="email" name="email" tabindex="2" placeholder="EMAIL" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>"/>
						<input type="text" id="objet" name="objet" tabindex="3" placeholder="OBJET" value="<?= isset($_SESSION['inputs']['sujet']) ? $_SESSION['inputs']['sujet'] : ''; ?>"/>
					</div>
					<div id="input"><textarea id="message" name="message" tabindex="4" cols="60" rows="8" placeholder="MESSAGE"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea></div>
					<div id="envoi"style="text-align:center;"><input type="submit" name="envoi" value="Envoyer le formulaire !" /></div>
			</form>
		</div>
    <div class="footer">
      <h1>Rejoignez-nous sur les réseaux sociaux</h1>
      <div id="sociaux">
        <a href="https://www.instagram.com/recip.eat/?hl=fr" target=_blank><i class="fab fa-instagram fa-2x"></i></a>
        <a href="https://www.facebook.com/Recipeat-2192508867455981/" target=_blank><i class="fab fa-facebook fa-2x"></i></a>
        <a href="https://twitter.com/EatRecip" target=_blank><i class="fab fa-twitter fa-2x"></i></a>
      </div>
      <div id="menu">
        <a href="index.html">Accueil</a>
        <a href="galerie.html">Galerie</a>
        <a href="apropos.html">A propos</a>
        <a href="contact.php">Contact</a>
      </div>
      <h4> Copyright Recip'eat - 2018 - <a href="http://www.mmirouen.fr/accueil.php" target=_blank>MMI ROUEN</a> </h4>
    </div>
  </body>
</html>
<?php
unset($_SESSION['errors']);
unset($_SESSION['inputs']);
unset($_SESSION['success']);
?>
