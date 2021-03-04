<section class="test">
	<h1><?= $prenom ?> !</h1>
	<h3>C'est trop facile le mvc!</h3>
	<p>Stylé!!!!</p>
	<img src="https://via.placeholder.com/150" alt="photo">
	<?php foreach ($_SESSION['url'] as $mot): ?>
		<h2><?= $mot ?></h2>
	<?php endforeach; ?>
</section>
