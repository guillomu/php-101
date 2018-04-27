<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php-101</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
	$lotr = array(
		'titre' => 'Le Seigneur des Anneaux',
		'prix' => 29.99,
		'note' => 5,
		'prime' => true
	);

	$fifhty = array(
		'titre' => '50 Nuances de Grey',
		'prix' => 19.99,
		'note' => 4,
		'prime' => true
	);

	$stupeur = array(
		'titre' => 'Stupeur et Tremblement',
		'prix' => 14.99,
		'note' => 4,
		'prime' => false
	);

	$got = array(
		'titre' => 'Games of Thrones - Tome 1',
		'prix' => 14.99,
		'note' => 4,
		'prime' => false
	);

	$harry = array(
		'titre' => 'Harry Potter: Harry Potter à l\'école des sorciers',
		'prix' => 9.99,
		'note' => 3,
		'prime' => true
	);

	$martine = array(
		'titre' => 'Martine à la plage',
		'prix' => 5.99,
		'note' => 2,
		'prime' => false
	);

	$altered = array(
		'titre' => 'Altered Carbon',
		'prix' => 9.99,
		'note' => 4,
		'prime' => false
	);

	$club = array(
		'titre' => 'Le Club des Cinqs',
		'prix' => 9.99,
		'note' => 4,
		'prime' => true
	);



	$livres = array($lotr, $fifhty, $stupeur, $got, $harry, $altered, $martine, $club);

	foreach ($livres as $livre) {
		echo '<div class="livre">';
		echo 'Titre: <span class="bold">'.$livre['titre'].'</span><br />';
		echo 'Prix: '.$livre['prix'].'€<br />';
		echo 'Note: '.$livre['note'].'<br />';

		echo '<span class="italic">';
		if ($livre['prime']==true) {
			echo 'Prime';  
		}
		else {
			echo 'Pas prime';
		}
		echo '</span>';
		echo '</div>';
	}

	?>
</body>
</html>