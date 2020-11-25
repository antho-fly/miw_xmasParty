<?php
if (isset($_POST['email'])) {

    header('Location: send_email.php?email=' . $_POST['email']);
    exit;
}

$form = "formulaire";
$send = 'hide';


if (isset($_GET['delivery']) and $_GET['delivery'] == "sent") {
    $form = 'hide';
    $send = 'show';
}

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MIW - Day 3</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="main">
            <form action="#" method="post" class="<?php echo $form ?>">
                <input id="email" class="inpForm" type="email" name="email" placeholder="Ton email de star..." required aria-label="Input Email"/>
                <button class="bg-mauve inpSub" type="submit">
                    Inscris-toi !
                    <img class="vip" src="images/icones/vip.png" alt="logo du bouton">
                </button>
            </form>
            <div class="cadreEmailSend <?php echo $send?>">
                <img src="images/icones/send.png" alt="logo lors de l'envoi validé">
            </div>
        </div>
    </body>
</html>
