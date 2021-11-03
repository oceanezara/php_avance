<html>
<body>

Merci <?php echo $_POST["prenom"]; ?> de nous avoir contacté à propos de <?php echo $_POST["theme"]; ?>.
<br>
Un de nos conseillers vous contactera soit à l'adresse <?php echo $_POST["user_email"]; ?> ou par téléphone au <?php echo $_POST["user_phone"]; ?> dans les plus brefs délais pour traiter votre demande : <br>

<?php echo $_POST["user_message"]; ?>

</body>
</html>

