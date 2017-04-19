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
	 		mail("jspanjerberg@gmail.com", $subject, $message . " " . $from, $from);
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

		<div class="site-container">

		<header class="header-menu-container">

			<figure class="header-menu-logo">

				<img src="images/spanjerberg_logo_nomusic_black.svg" alt="Spanjerberg spelled out in black letters">

			</figure>

			<ul class="header-menu-list">

				<span>

					<div class="menu-list-item-rightborder">

						<a href="#"><li class="header-menu-list-item">Home</li></a>

					</div>

				</span>

				<span>

					<div class="menu-list-item-rightborder">

						<a href="#"><li class="header-menu-list-item">Lessen</li></a>

					</div>

				</span>

				<span>

					<div class="menu-list-item-rightborder">

						<a href="#"><li class="header-menu-list-item">Prijzen</li></a>

					</div>

				</span>

				<span>

					<div class="menu-list-item-rightborder">

						<a href="#"><li class="header-menu-list-item">Contact</li></a>

					</div>

				</span>

			</ul>

		</header>

		<figure class="header-image">

			<img src="images/header-image-1920.jpg" alt="Joost mentoring girl playing guitar">
			<!-- <img class="header-image-logo" src="images/spanjerberg_logo_white.svg" alt="Spanjerberg spelled out in white letters"> -->

		</figure>

		<main class="main-content-container">

			<section class="main-content-section-container">

				<header class="section-container-header">

					<h1>Bent u op zoek naar een gitaardocent?</h1>

				</header>

				<section class="section-container-content">

					<figure class="section-container-image">

						<img src="images/section-content-side-image-1024.jpg" alt="Joost standing in front of a blue frontdoor">

					</figure>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

					<p>
						Vivamus nec magna ante.
						Donec scelerisque felis ac finibus congue.
						Curabitur ultrices velit non metus faucibus, tincidunt pulvinar ante efficitur.
						In sagittis dignissim metus, eu elementum odio. Morbi eget lacus eros.
						Phasellus ipsum velit, commodo id vulputate eget, lacinia sed nibh.
					</p>

				</section>

			</section>

			<section class="main-content-section-container">

				<header class="section-container-header">

					<h1>Lessen</h1>

				</header>

				<section class="section-container-content">

					<figure class="section-container-image">

						<img src="images/section-content-side-image-1024.jpg" alt="Joost standing in front of a blue frontdoor">

					</figure>

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

				</section>

			</section>

			<section class="main-content-section-container">

				<header class="section-container-header">

					<h1>Prijzen</h1>

				</header>

				<section class="section-container-content">

					<figure class="section-container-image">

						<img src="images/section-content-side-image-1024.jpg" alt="Joost standing in front of a blue frontdoor">

					</figure>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

					<p>
						Vivamus nec magna ante.
						Donec scelerisque felis ac finibus congue.
						Curabitur ultrices velit non metus faucibus, tincidunt pulvinar ante efficitur.
						In sagittis dignissim metus, eu elementum odio. Morbi eget lacus eros.
						Phasellus ipsum velit, commodo id vulputate eget, lacinia sed nibh.
					</p>

				</section>

			</section>

			<section class="main-content-section-container">

				<header class="section-container-header">

					<h1>Contact</h1>

				</header>

				<section class="section-container-content">

					<figure class="section-container-image">

						<img src="images/section-content-side-image-1024.jpg" alt="Joost standing in front of a blue frontdoor">

					</figure>

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

			</section>

		</main>

		</div>

  </body>

</html>
