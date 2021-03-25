<main>
	<section class="recherche_client">
		<a onclick="toggle('client_form')" href="#">Rechercher un client</a>
		<div id=client_form  style="display: none">
			<form  method="post" action="admin/userdetails">
				<fieldset>
					<label for="id">Id client</label>
					<input type="text" name="id">
				</fieldset>
				<fieldset>
					<label for="login">Login</label>
					<input type="text" name="login">
				</fieldset>
				<fieldset>
					<label for="Prenom">Prénom client</label>
					<input type="text" name="prenom">
				</fieldset>
				<fieldset>
					<label for="Nom">Nom client</label>
					<input type="text" name="nom">
				</fieldset>
				<fieldset>
					<label for="Email">Email client</label>
					<input type="text" name="email">
				</fieldset>
				<fieldset>
					<label for="Adress">Adresse client</label>
					<input type="text" name="adress">
				</fieldset>

				<input type="submit" name="search_user">
			</form>
		</div>
	</section>

	<section>
		<a href="#" onclick="toggle('command_form')">Rechercher une commmande</a>
		<form id="command_form" method="get" action="admin/orderdetails" style="display: none">
			<fieldset>
				<label for="Commande">N° de commande</label>
				<input type="text" name="order_number">
			</fieldset>
			<input type="submit" name="search_order">
		</form>
	</section>

	<section >
		<a href="#" onclick="toggle('product_form')">Ajouter un produit</a>
		<form id="product_form" method="post" action="admin" style="display: none">
            <fieldset>
				<label for="product_category">Catégorie produit</label>
				<select name="product_category">
                    <?php $this->displayCategory() ?>
				</select>
			</fieldset>
			<fieldset>
				<label for="product_name">Nom produit</label>
				<input type="text" name="product_name">
			</fieldset>
			<fieldset>
				<label for="product_description">Description produit</label>
				<input type="text" name="product_description">
			</fieldset>
			<fieldset>
				<label for="product_color">Couleur</label>
				<input type="text" name="product_color">
			</fieldset>
			<fieldset>
				<label for="product_fabric">Matière</label>
				<input type="text" name="product_fabric">
			</fieldset>
			<fieldset>
				<label for="article_price">Prix</label>
				<input type="number" step="any" name="product_price">
			</fieldset>
			<fieldset>
				<label for="article_code">Code article</label>
				<input type="number" name="article_code">
			</fieldset>
			<input type="submit" name="add_product">
		</form>
	</section>
    <section>
        <a href="#" onclick="toggle('category_form')">Ajouter une catégorie</a>
        <form id="category_form" method="post" action="admin" style="display: none">
            <fieldset>
                <label for="product_category">Catégorie produit</label>
                <input type="text" name="category_name">
                <select name="category_hierarchy">
                    <option>haut</option>
                    <option>bas</option>
                </select>
                <input type="submit" name="add_category">
            </fieldset>
        </form>
    </section>

	<section>
		<a href="#" onclick="toggle('product_maj')">Mettre à jour l'état de stock d'un article</a>
		<form id="product_maj" method="get" action="admin/stockupdate" style="display: none">
			<fieldset>
				<input type="number" name="article_code">
			</fieldset>
			<input type="submit">
		</form>
	</section>
    <section>
        <a href="#" onclick="toggle('product_info')">Mettre à jour les infos produit</a>
        <form id="product_info" method="post" action="admin/productupdate" style="display: none">
            <fieldset>
                <input type="number" name="article_code">
            </fieldset>
            <input type="submit" name="product_info">
        </form>
    </section>
    <section>
        <a href="#" onclick="toggle('product_info')">Acceder au dashboard</a>
        <div class="graph_show">
            <canvas id="myChart" width="700" height="400"></canvas>
            <script>
                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: <?php echo $labels_js?>,
                        datasets: [{
                            data: <?php echo $data_js?>,
                            backgroundColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(255, 159, 64, 1)',
                                'rgba(3, 207, 252, 1)',
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(255, 159, 64, 1)',
                                'rgba(3, 207, 252, 1)',
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        legend: {
                            labels: {
                                fontColor: 'white'
                            }
                        }
                    }
                });
            </script>
        </div>  
    </section>
</main>
