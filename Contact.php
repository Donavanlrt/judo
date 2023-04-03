<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STAGE ----- Judo Jujitsu Self-Défense Hénin-Beaumont</title>
    <link href="Contact.css" rel="stylesheet">
</head>

<body>

    <!-- HEADER -->

    <div class="header">
        <nav>
            <ul>
                <div class="menu-header">
                    <img class="logo" src="/home-img/logo.png" alt="">
                    <li>
                        <a class="menu1" href="index.html">Accueil</a>
                    </li>
                    <li>
                        <a class="menu1" href="LeClubPage.html">Le Club</a>
                    </li>
                    <li>
                        <a class="menu1" href="RegisterPage.html">Comment s'inscrire ?</a>
                    </li>
                    <li>
                        <a class="menu1" href="Archives.html">Archives</a>
                    </li>
                    <li>
                        <a class="menu1" href="https://www.ffjudo.com/">F.F.J.D.A</a>
                    </li>
                    <li>
                        <a class="menu1" href="Contact.html">Contact</a>
                    </li>
                </div>
            </ul>
        </nav>
    </div>

    <!-- BODY -->

    <div class="body">

        <div class="contactez">CONTACTEZ-NOUS

            <div class="questions">Une question ? Besoin d’informations supplémentaires ? Contactez nous !<br>
                Nous sommes présents aux horaires de cours.</div>
        </div>

        <div class="background-white">

            <?php
            if (isset($_POST['mailform'])) {
                if (!empty($_POST['nom']) and !empty($_POST['mail']) and !empty($_POST['message'])) {
                    $header = "MIME-Version: 1.0\r\n";
                    $header .= 'From:"Votre nom"<email-expediteur@example.org>' . "\n";
                    $header .= 'Content-Type:text/html; charset="uft-8"' . "\n";
                    $header .= 'Content-Transfer-Encoding: 8bit';

                    $message = '
				<div align="center">
					<u>Nom de l\'expéditeur :</u>' . $_POST['nom'] . '<br />
					<u>Mail de l\'expéditeur :</u>' . $_POST['mail'] . '<br />
					<br />
					' . nl2br($_POST['message']) . '
				</div>
		';

                    mail("donavanlrt@gmail.com", "CONTACT - Judo-jujitsu Henin", $message, $header);
                    $msg = "Votre message a bien été envoyé !";
                } else {
                    $msg = "Tous les champs doivent être complétés !";
                }
            }
            ?>
            


            <div class="formulaire">
                <h2 class="unequestion">Une question ? Posez la ici !</h2>
                <form method="POST" action="">
                    <a>Votre nom<br></a>
                    <input type="text" class="formulaire-name" name="nom" placeholder="Bruno" value="<?php if (isset($_POST['nom'])) {
                                                                                                            echo $_POST['nom'];
                                                                                                        } ?>" /><br /><br />
                    <a>Votre email<br></a>
                    <input type="email" class="formulaire-mail" name="mail" placeholder="judo@henin.com" value="<?php if (isset($_POST['mail'])) {
                                                                                                                    echo $_POST['mail'];
                                                                                                                } ?>" /><br /><br />
                    <a>Votre message<br></a>
                    <textarea name="message" placeholder="Bonjour, je souhaiterais inscrire mon fils..."><?php if (isset($_POST['message'])) {
                                                                                                                echo $_POST['message'];
                                                                                                            } ?></textarea><br /><br />
                    <input type="submit" class="formulaire-button" value="Envoyer" name="mailform" />
                </form>
            </div>

            <?php
            if (isset($msg)) {
                echo $msg;
            }
            ?>

            <div class="pm">
                <div class="phone">
                    <a class="tel">Par Téléphone</a>
                    <br><br><a class="telto" href="tel:0670964310">06 70 96 43 10</a>
                    <br><a class="telto" href="tel:0321086046">03 21 08 60 46</a>
                    <br><i>(aux horaires de cours)</i>
                </div>

            <div class="henin-bmt">
                <div class="localisation">à Hénin-Beaumont (62110)
                    <a class="rue-text"><br><br>Rue René Cassin, Espace François Mitterrand
                        <br>Dojo Jean-Louis GEYMOND
                        <br>Entre la zone "Bord des eaux" et le Lycée Fernand Darchicourt.</a>
                </div>
            </div>
            </div> <!-- pm div -->

                <div class="plan">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2542.634812301419!2d2.9601586153692496!3d50.41064309811402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dd3346e5f874f3%3A0xa221c2d06df6ec00!2sEspace%20Fran%C3%A7ois%20Mitterrand!5e0!3m2!1sfr!2sfr!4v1666262669686!5m2!1sfr!2sfr" width="500" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </div> <!-- background-white div -->

    </div> <!-- body div -->

    <!-- FIN BODY -->

    <!-- FOOTER -->

    <div class="footer">
        <a href="https://www.facebook.com/heninjudojujitsu.taiso" title="">
            <img class="logo-fb" alt="" src="home-img/facebook.png" />
        </a>

        <a href="https://www.youtube.com/channel/UC5-VpKAXlbzGQ9S2ChmEEFg" title="">
            <img class="logo-ytb" alt="" src="home-img/youtube.png" />
        </a>
    </div>

</body>

</html>