<html lang="fr">
<head>
    <title> Contacts</title>
    <link rel="stylesheet" href="vitrine.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php 
$page_title = "Contact";
include ('header.php');
?>
<main class="Contacts">
  <h2>Contacts</h2>
  <div>
    <form action="/action_page.php">
    <input type= "text" id="Nom" name="Votre nom" placeholder="Votre nom">
    <input type="text" id="email" naùe="Votre email" placeholder="Votre email">
    <input type="text" id="ask" name="Comment améliorer mon site?" placeholder="Comment améliorer mon site?">
<input type="submit" value="Envoyer">
    </input>
  </form>
  </div>
</body>
</main>
</html>
