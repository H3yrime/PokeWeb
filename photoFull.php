<?php
$file = $_GET['src'];
$exif = exif_read_data('img/gallery/' . $file, 0, true);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="robots" content="noindex">
	<meta name="author" content="Guillaume et Paul-Antoine">
	<title>Photo ― Pokéweb</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="icon" href="favicon.ico">
	<link rel="icon" type="image/png" href="favicon.png">
</head>
<body>

<div id="socialNetworks">
	<a href="https://www.facebook.com/Pokemon" target="_blank" class="fb"></a>
	<a href="https://www.twitter.com/PokemonFR" target="_blank" class="tw"></a>
	<a href="https://www.youtube.com/PokemonOfficielFR" target="_blank" class="yt"></a>
</div>

<div id="wrapper">
	<header>
		<img src="img/logo.png" alt="Pokéweb"/>
		<p>Un zeste d'actualité autour du jeu phénomène du moment.</p>
		<nav>
			<ul>
				<li class="home"><a href="./">Accueil</a></li><!--
			 --><li class="pokemon"><a href="pokemons.php">Pokémons</a></li><!--
			 --><li class="medias active"><a href="medias.php">Médias</a><!--
				 --><ul class="dropdownMedias">
			 			<li><a href="photos.php">Photos</a></li>
			 			<li><a href="videos.php">Vidéos</a></li>
			 		</ul>
			 	</li><!--
			 --><li class="contact"><a href="contact.php">Contact</a></li><!--
			 --><li class="credits"><a href="credits.php">Crédits</a></li><!--
			 --><li class="dons"><a href="dons.php">Dons</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<div class="leftcol">
			<section class="photoFull">
				<h2><i class="fa fa-angle-double-right" aria-hidden="true"></i> Photo</h2>
				<a href="photos.php"><i class="fa fa-angle-left" aria-hidden="true"></i> Retour à la galerie de photos</a>
				<figure>
					<?php echo $exif['IFD0']['Comments'];?>
					<img src="img/gallery/<?php echo $file; ?>" alt="Oops ! Image introuvable.">
				</figure>
			</section>
		</div>
		<div class="rightcol">
			<aside class="download">
				<h2><i class="fa fa-download" aria-hidden="true"></i> Télécharger Pokémon Go</h2>
				<a href="https://itunes.apple.com/fr/app/pokemon-go/id1094591345" target="_blank"><img src="img/iosApp.png" alt="Télécharger sur l'App Store"></a>
				<a href="https://play.google.com/store/apps/details?id=com.nianticlabs.pokemongo" target="_blank"><img src="img/androidApp.png" alt="Télécharger sur le Play Store"></a>
			</aside>
			<aside class="leaderboard">
				<h2><i class="fa fa-star" aria-hidden="true"></i> Top 5 meilleurs dresseurs</h2>
				<ul>
					<li class="first"><a href="http://www.topdresseur.fr/ville/Utilisateur/FicheIdentite.php?u=3288" target="_blank">1. LahouD33</a></li>
					<li class="second"><a href="http://www.topdresseur.fr/ville/Utilisateur/FicheIdentite.php?u=2516" target="_blank">2. Wirei</a></li>
					<li class="third"><a href="http://www.topdresseur.fr/ville/Utilisateur/FicheIdentite.php?u=3396" target="_blank">3. Alexpuk03boss</a></li>
					<li class="fourth"><a href="http://www.topdresseur.fr/ville/Utilisateur/FicheIdentite.php?u=3199" target="_blank">4. Ninou382</a></li>
					<li class="fifth"><a href="http://www.topdresseur.fr/ville/Utilisateur/FicheIdentite.php?u=2724" target="_blank">5. Kaurky</a></li>
				</ul>
				Source : <a href="http://www.topdresseur.fr/" target="_blank">topdresseur.fr</a><br>
				Mis à jour le 16/10/2016.
			</aside>
		</div>
	</main>
	<footer>
		<p><span>Pokéweb © 2016</span><br>
		Site internet fictif développé dans un objectif pédagogique. Pokéweb n'est pas affilié à The Pokémon Company ou à Niantic.<br>COTHENET Guillaume &amp; DENIS Paul-Antoine</p>
	</footer>
</div>

</body>
</html>