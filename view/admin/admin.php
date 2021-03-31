<div class="accordion container" id="accordionExample">
	<div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Rechercher un client</button>
        </h2>
		<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <form  method="post" action="admin/userdetails">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Id client</span>
                        <input type="text" class="form-control" name="id">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Login</span>
                        <input type="text" class="form-control" name="login">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Prénom client</span>
                        <input type="text" class="form-control"name="prenom">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Nom client</span>
                        <input type="text" class="form-control" name="nom">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Email client</span>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Adresse client</span>
                        <input type="text" class="form-control" name="adress">
                    </div>

                    <input type="submit" name="search_user">
                </form>
		    </div>
        </div>
	</div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Rechercher une commmande</button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <form id="command_form" method="get" action="admin/orderdetails">
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">N° de commande</span>
                    <input type="number" class="form-control" name="order_number">
                </div>
                <input type="submit" name="search_order">
            </form>
            </div>
	    </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">Ajouter un produit</button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <form id="product_form" method="post" action="admin">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Catégorie produit</label>
                        <select class="form-select" id="inputGroupSelect01" name="product_category">
                            <?php $this->displayCategory() ?>
                        </select>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Nom produit</span>
                        <input type="text" class="form-control" name="product_name">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Description produit</span>
                        <input type="text" class="form-control" name="product_description">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Couleur</span>
                        <input type="text" class="form-control" name="product_color">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Matière</span>
                        <input type="text" class="form-control" name="product_fabric">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Prix</span>
                        <input type="number" class="form-control" step="any" name="product_price">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Code article</span>
                        <input type="number" class="form-control" name="article_code">
                    </div>
                    <input type="submit" name="add_product">
                </form>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">Ajouter une catégorie produit</button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <form id="category_form" method="post" action="admin">
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Catégorie produit</span>
                    <input type="text" class="form-control" name="category_name">
                </div>
                <div class="input-group input-group-sm mb-3">
                <select class="form-select" id="inputGroupSelect01" name="category_hierarchy">
                        <option>haut</option>
                        <option>bas</option>
                    </select>
                </div>
                    <div class="input-group input-group-sm mb-3">
                        <input type="submit" name="add_category">
                    </div>
            </form>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">Mettre à jour l'état de stock d'un article</button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                    <form id="product_maj" method="get" action="admin/stockupdate">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Code article</span>
                            <input type="number" name="article_code">
                        </div>
                        <input type="submit" name="stock_update">
                    </form>
            </div>
        </div>
    </div>
</main>
