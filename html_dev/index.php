<?php
if ($_POST) {
   // Execute code (such as database updates) here.

	  // $name=$_REQUEST['name'];
	 $emailone=$_REQUEST['emailone'];
	 $emailtwo=$_REQUEST['emailtwo'];
	 $message=$_REQUEST['message'];
	 if ($emailone == "" || $emailtwo == "" || $emailone != $emailtwo || $message == "")
	 		{
	    	header("Location: " . $_SERVER['PHP_SELF'] . "?v=false");
	 		}
	 else
	 {
	 		$from="From: " . $emailone;
	 		$subject="Ik wil graag contact met je!";
	 		mail("jspanjerberg@gmail.com", $subject, $message . "\r\n" . $from, $from);
	    header("Location: " . $_SERVER['PHP_SELF'] . "?v=true");
	 	}

   // Redirect to this page.
   exit();
}
?>

<!DOCTYPE HTML>

<html class="no-js">

	<head>

        <meta charset="utf-8">
        <title>Joost Spanjerberg Portfolio</title>
        <meta name="description" content="Joost Spanjerberg Portfolio">
        <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0" />
        <link rel="stylesheet" href="css/style.css" media="all">

  </head>

  <body>

		<div id="result"></div>

		<div class="site-container" id="home">

			<header class="header-menu-container">

				<figure class="header-menu-logo">

					<img src="images/spanjerberg_logo_nomusic_black.svg" alt="Spanjerberg spelled out in black letters">

				</figure>

				<ul class="header-menu-list">

					<span>

						<div class="menu-list-item-rightborder">

							<li class="header-menu-list-item"><a href="#main-content-container">Home</a></li>

						</div>

					</span>

					<span>

						<div class="menu-list-item-rightborder">

							<li class="header-menu-list-item"><a href="#lessen">Lessen</a></li>

						</div>

					</span>

					<span>

						<div class="menu-list-item-rightborder">

							<li class="header-menu-list-item"><a href="#prijzen">Prijzen</a></li>

						</div>

					</span>

					<span>

						<div class="menu-list-item-rightborder">

							<li class="header-menu-list-item"><a href="#contact">Contact</a></li>

						</div>

					</span>

				</ul>

			</header>

			<figure class="header-image">

				<img src="images/header-image-1280.jpg" srcset="images/header-image-768.jpg 768w, images/header-image-1920.jpg 1920w, images/header-image-2560.jpg 2560w, images/header-image-3840.jpg 3840w" alt="Joost mentoring girl playing guitar">

			</figure>

			<main class="main-content-container" id="main-content-container">

				<section class="main-content-section-container">

					<header class="section-container-header">

						<h1>Bent u op zoek naar een gitaardocent?</h1>

					</header>

					<section class="section-container-content">

						<article class="section-container-article-text">

							<p>
								Vivamus nec magna ante.
								Donec scelerisque felis ac finibus congue.
								Curabitur ultrices velit non metus faucibus, tincidunt pulvinar ante efficitur.
								In sagittis dignissim metus, eu elementum odio. Morbi eget lacus eros.
								Phasellus ipsum velit, commodo id vulputate eget, lacinia sed nibh.
							</p>

						</article>

						<figure class="section-container-image">

							<img src="images/content-image-01-1024.jpg" srcset="images/content-image-01-768.jpg 768w, images/content-image-01-512.jpg 512w, images/content-image-01-256.jpg 256w" alt="Joost standing in front of a blue frontdoor">

						</figure>

					</section>

				</section>

				<section class="main-content-section-container">

					<header class="section-container-header" id="lessen">

						<h1>Lessen</h1>

					</header>

					<section class="section-container-content">

						<article class="section-container-article-text">

							<p>Hoe zijn de lessen opgebouwd?</p><br>

								<ul class="section-nested-list">

									<li>Tijd : 30 minuten</li>

									<li><strong>Les 1</strong>

										<ul>

											<li>Introductie</li>

										</ul>

									</li>

									<li><strong>Les 2</strong>

										<ul>

											<li>Dingen</li>

										</ul>

									</li>

									<li><strong>Les 3</strong>

										<ul>

											<li>Meer dingen</li>

										</ul>

									</li>

								</ul>

						</article>

						<figure class="section-container-image">

							<img src="images/content-image-01-1024.jpg" srcset="images/content-image-01-768.jpg 768w, images/content-image-01-512.jpg 512w, images/content-image-01-256.jpg 256w" alt="Joost standing in front of a blue frontdoor">

						</figure>

					</section>

				</section>

				<section class="main-content-section-container">

					<header class="section-container-header" id="prijzen">

						<h1>Prijzen</h1>

					</header>

					<section class="section-container-content">

						<article class="section-container-article-text">

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

							<p>
								Vivamus nec magna ante.
								Donec scelerisque felis ac finibus congue.
								Curabitur ultrices velit non metus faucibus, tincidunt pulvinar ante efficitur.
								In sagittis dignissim metus, eu elementum odio. Morbi eget lacus eros.
								Phasellus ipsum velit, commodo id vulputate eget, lacinia sed nibh.
							</p>

						</article>

						<figure class="section-container-image">

							<img src="images/content-image-01-1024.jpg" srcset="images/content-image-01-768.jpg 768w, images/content-image-01-512.jpg 512w, images/content-image-01-256.jpg 256w" alt="Joost standing in front of a blue frontdoor">

						</figure>

					</section>

				</section>

				<section class="main-content-section-container">

					<header class="section-container-header" id="contact">

						<h1>Contact</h1>

					</header>

					<section class="section-content-contact-container">

						<div class="display-flex">

								<section class="contact-form" id="contact-me-form">

							    <form action="index.php#contact" method="POST" enctype="multipart/form-data">

								    <input type="hidden" name="action" value="submit">

										<h4>Wat is je emailadres?</h4> <br>
										<input name="emailone" id="emailone" class="contact-form-input-border " type="email" value="" size="30" required placeholder="Voer je emailadres in." onblur="return validateEmail()"/><br>

										<h4>Wat is je email ter controle?</h4> <br>
										<input name="emailtwo" id="emailtwo" class="contact-form-input-border " type="email" value="" size="30" required placeholder="Voer je emailadres nogmaals in." onblur="return validateEmail()"/><br>

										<label class="contact-form-errormessage" id="contact-form-emailtwo-error">

											<?php

											$safeGet = "";

											if (isset($_GET["v"]))
											{
												$safeGet = htmlspecialchars($_GET["v"]);
											}

											if ($safeGet == "" || $safeGet == "false")    /* display the contact form */
													{

														if ($safeGet == "false")
														{
															echo "<strong><u>Vul alsjeblieft een bericht in.</u></strong>";
														}
											}
											else                /* send the submitted data */
													{

															if($safeGet == "true")
															{
																echo "<strong>Je bericht is verstuurd!</strong>";
															}
															else {
																echo "<strong>Er is iets fout gegaan! Vul het formulier alsjeblieft opnieuw in.</strong>";
															}

													}
											?>

										</label>

										<h4>Wat kan ik voor je doen?</h4> <br>
										<textarea name="message" rows="7" cols="30" placeholder="Ik wil graag contact met je!"></textarea><br>
										<input type="submit" value="Stuur mij een bericht!" class="buttonDisabled" id="input-submit-button" disabled/>

									</form>


						</section>

					<section class="contact-socialmedia-container">

						<header><h1>Vind mij op sociale media!</h1></header>

						<figure class="contact-socialmedia-icons"><a href="https://www.facebook.com/joost.spanjerberg?fref=ts" target="_blank"><img src="images/facebook-logo-color.svg" alt="Facebook icon"></img></a></figure>
						<figure class="contact-socialmedia-icons"><a href=""><img src="images/Instagram_logo_2016-coloured.svg" alt="Instagram icon"></img></a></figure>
						<figure class="contact-socialmedia-icons"><a href=""><img src="images/youtube-logo-color.svg" alt="Youtube icon"></img></a></figure>
						<figure class="contact-socialmedia-icons"><a href=""><img src="images/soundcloud-logo-color.svg" alt="SoundCloud icon"></img></a></figure>

						<!-- Dit is een comment -->

					</section>

					</div>

				</section>

			</main>

			<footer class="footer-container">

				<section class="footer-section">

					<small>Website gemaakt door Doortje Spanjerberg</small><br>
					<small>Regel twee</small><br>
					<small>Regel drie</small><br>

				</section>

				<section class="footer-section">

					<small>Fotografie door Pietje</small><br>
					<small>Gitaar geleverd door Henk</small><br>

				</section>

				<section class="footer-section">

					<small>KVK nummer: 1234567890</small><br>
					<small>Spanjerberg BV</small><br>
					<small>Europaplein 1337 Utrecht</small><br>

				</section>

			</footer>

		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="js/scrollToElement.js"></script>
		<script src="js/modernizr-custom.js"></script>

  </body>

</html>
