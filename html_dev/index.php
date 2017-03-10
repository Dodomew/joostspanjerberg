<!DOCTYPE HTML>

<html>

	<head>

        <meta charset="utf-8">
        <title>Joost Spanjerberg Portfolio</title>
        <meta name="description" content="Joost Spanjerberg Portfolio">
        <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0" /> <!--user-scalable=no -->
        <link rel="stylesheet" href="css/style.css" media="all">

  </head>

  <body>

		<header class="header-container">

			<section class="header-title">

				<img src="images/Logo_SpanjerbergMuziek.png" alt="Spanjerberg textual logo">

			</section>

			<img src="images/joost_headerPhoto.jpg" alt="Photo of Joost teaching guitar to a girl">

		</header>

		<nav class="nav-container">

			<ul class="nav-menu">

				<li>Home</li>
				<li>Lessen</li>
				<li>Contact</li>

		</nav>

		<main class="content-container">

				<section class="about-me-section">

					<h3>Hallo! Mijn naam is Joost en ik ben gitarist. Ik treed veel op met bands en geef graag gitaarles aan anderen.</h3>

					<h4>Hieronder vind je referenties over mij:

						<ul>

							<li>Meneer 1 : Ja, die Joost is echt een baas. Ik ben een meester in gitaar spelen geworden en kan nu altijd Wonderwall spelen wanneer nodig.</li>
							<li>Vrouw 1: Joost heeft mijn dochter goed begeleid met het leren van de gitaar! Ze wilde eigenlijk liever op onze iPad spelen, maar we vinden dat ze wel iets nuttigs mag leren en daar heeft Joost bij geholpen.</li>
							<li>Ikea: Wij huren Joost af en toe in voor een leuk achtergrondmuziek in de winkel. Beter dan die meuk op de radio!</li>

						</ul>

					</h4>

					<h4>Hieronder de bands waar ik mee optreed:

						<ul>

							<li>Brighter Light</li>
							<li>Mills</li>

						</ul>

					</h4>

					<h4>Check dit vette plaatje dan (Dit kan eventueel kleiner):

						<img src="images/DSCF8056.JPG" alt="Joost teaching guitar">

					</h4>

				</section>

				<aside class="sidebar-container">

					<h5>Vragen? Mail mij: jspanjerberg@gmail.com</h5>

					<section class="social-media-container">

						<img src="images/mail-1.svg" alt="Mail icon in black">
						<img src="images/facebook.svg" alt="Facebook icon in black">
						<img src="images/facebook.svg" alt="Facebook icon in black">

					</section>

					<?php
					$action=$_REQUEST['action'];
					if ($action=="")    /* display the contact form */
					    {
					    ?>

						<section class="contact-form">

					    <form action="" method="POST" enctype="multipart/form-data">
					    <input type="hidden" name="action" value="submit">
					    Wat is je naam?<br>
					    <input name="name" type="text" value="" size="30"/><br>
					    Wat is je emailadres?<br>
					    <input name="email" type="text" value="" size="30"/><br>
					    Wat kan ik voor je doen?<br>
					    <textarea name="message" rows="7" cols="30"></textarea><br>
					    <input type="submit" value="Stuur mij een mail!" class="contact-form-submit"/>
					    </form>


					    <?php
					    }
					else                /* send the submitted data */
					    {
					    $name=$_REQUEST['name'];
					    $email=$_REQUEST['email'];
					    $message=$_REQUEST['message'];
					    if (($name=="")||($email=="")||($message==""))
					        {
					        echo "Vul alsjeblieft <a href=\"\">alle velden in.</a>";
					        }
					    else{
					        $from="From: $name($email)";
					        $subject="SUBJECT HERE";
					        mail("jspanjerberg@gmail.com", $subject, $message, $from);
					        echo "Email is verstuurd!";
					        }
					    }
					?>

					</section>

				</aside>

		</main>

		<footer class="footer-container">

			<h6>Website gemaakt door Doortje Spanjerberg</h6>
			<h6>Foto's gemaakt door Pietje Puk</h6>
			<h6>KVK Nummer: 12345</h6>

		</footer>

  </body>

</html>
