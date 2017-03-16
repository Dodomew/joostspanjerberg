<?php
if ($_POST) {
   // Execute code (such as database updates) here.

	 $name=$_REQUEST['name'];
	 $email=$_REQUEST['email'];
	 $message=$_REQUEST['message'];
	 if ($email == "")
	 		{
	 		//echo "Vul alsjeblieft <a href=\"\">alle velden in.</a>";
	    header("Location: " . $_SERVER['PHP_SELF'] . "?v=false");
	 		}
	 else{
	 		$from="From: $name($email)";
	 		$subject="Ik wil graag contact met je!";
	 		mail("jspanjerberg@gmail.com", $subject, $message, $from);
	 		//echo "Email is verstuurd!";
	    header("Location: " . $_SERVER['PHP_SELF'] . "?v=true");
	 		}

   // Redirect to this page.
   exit();
}
?>
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

		<a href="#content">

			<header class="header-container">

				<picture>

					<!-- Hieronder is je Header image plaating. Deze srcset bevat de breakpoints voor het inladen van je header. Als de viewport (de breedte van de browser) 1366px breed is, of minder, dan laadt
				ie de 1366.jpg in. Als de width 1024 of lager is, dan laadt de browser de 1024.jpg in, enzovoor.
			Als je dus je nieuwe header hebt, kun je die het beste in onderstaande formaten (breedte) opslaan.
		Mocht alles for some reason falen, dan laadt ie de 2540 breedte in -->

						<img srcset="images/joost_headerPhoto_1366.jpg 1366w,

				      images/joost_headerPhoto_1024.jpg 1024w,

				      images/joost_headerPhoto_768.jpg 768w"

				   sizes="100vw"

				   src="images/joost_headerPhoto_2540.jpg" alt="Joost playing guitar"
					 />

				</picture>

			</header>

		</a>

		<nav class="nav-container">

			<ul class="nav-menu"> <!-- Dit is je menu. Voor een nieuwe menu item, kopieer een van deze regels of tik <li>Je nieuwe Menu item</li> -->

				<a href="index.php"><li>Home</li></a>
				<a href="lessen.php"><li>Lessen</li></a>
				<a href="contact.php"><li>Contact</li></a>

		</nav>

		<main class="content-container" id="content">

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

						<p>Check dit vette plaatje dan (Dit kan eventueel kleiner). Check dit vette plaatje dan (Dit kan eventueel kleiner). Check dit vette plaatje dan (Dit kan eventueel kleiner). </p>

					</h4>

					<h4>Check dit vette plaatje dan (Dit kan eventueel kleiner):

						<img src="images/DSCF8056.JPG" alt="Joost teaching guitar">

					</h4>

				</section>

				<aside class="sidebar-container" id="sidebar-container-id">

					<h5>Vragen? Mail mij: jspanjerberg@gmail.com</h5>

					<section class="social-media-container">

						<!-- De image sources zijn nu placeholders. die kun je vervangen door iets anders. Ik gebruik .svg's (adobe illustrator) want die zijn responsive op elk formaat -->

						<a href="mailto:dodomew@gmail.com?subject=Hoi%20Joost" target="_blank"><img src="images/mail-1.svg" alt="Mail icon in black"></a>
						<a href="https://www.facebook.com/joost.spanjerberg?fref=ts"><img src="images/facebook.svg" alt="Facebook icon in black"></a>

					</section>

					<?php

					//$safeGet = htmlspecialchars($_GET["v"]);

					$safeGet = "";

					if (isset($_GET["v"]))
					{
						$safeGet = htmlspecialchars($_GET["v"]);
					}

					if ($safeGet == "" || $safeGet == "false")    /* display the contact form */
					    {

								if ($safeGet == "false")
								{
									echo "<strong>Vul alsjeblieft alle velden in.</strong>";
								}
					    ?>

						<section class="contact-form" id="contact-me-form">

					    <form action="index.php#sidebar-container-id" method="POST" enctype="multipart/form-data">
					    <input type="hidden" name="action" value="submit">

					    Wat is je naam?<br>
					    <input name="name" type="text" value="" size="30" placeholder="Mijn naam is..."/><br>

					    Wat is je emailadres?<br>
					    <input name="email" type="email" value="" size="30" required placeholder="Voer je emailadres in."/><br>

					    Wat kan ik voor je doen?<br>
					    <textarea name="message" rows="7" cols="30" placeholder="Ik wil graag contact met je!"></textarea><br>
					    <input type="submit" value="Stuur mij een mail!" class="contact-form-submit"/>
					    </form>


					    <?php
					    }
					else                /* send the submitted data */
					    {

									if($safeGet == "true")
									{
										echo "<strong>Email is verstuurd!</strong>";
									}
									else {
										echo "<strong>Er is iets fout gegaan! Vul het formulier alsjeblieft opnieuw in.</strong>";
									}

					    }
					?>

					</section>

				</aside>

		</main>

		<footer class="footer-container">

			<h6>Website gemaakt door Doortje Spanjerberg</h6>
			<h6>Foto's gemaakt door Pietje Puk</h6>
			<h6>KVK Nummer: 12345<br>Lalalala<br>Lololooooo</h6>

		</footer>

  </body>

</html>
