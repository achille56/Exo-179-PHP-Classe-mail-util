<?php
    require "./classes/sendMail.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Envoyer un mail</title>
</head>

<body>
    <form method="post" action="index.php">
        <div>
            <label for="id-name">Votre nom</label>
            <input type="text" name="name" id="id-name" required>
        </div>
        <div>
            <label for="id-myMail">Entrer votre Mail</label>
            <input type="email" id="id-myMail" required>
        </div>
        <div>
            <label for="id-recipient">Destinataire(s) :</label>
            <input type="email" id="id-recipient" required>
        </div>
        <div>
            <label for="id-object">Objet :</label>
            <input type="text" id="id-object" required>
        </div>
        <div>
            <label for="id-remark">commentaire</label>
            <textarea name="remark" id="id-remark" required></textarea>
        </div>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>

<?php

if (isset($_POST["id-name"], $_POST["id-myMail"], $_POST["id-recipient"], $_POST["id-object"], $_POST["id-remark"])) {
    $SendEmail = new Mail($_POST["id-name"], $_POST["id-myMail"], $_POST["id-recipient"], $_POST["id-object"], $_POST["id-remark"]);
    $SendEmail->sendMail();
}
