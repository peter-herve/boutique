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
                <fieldset>
                    <label for="Commande">N° de commande</label>
                    <input type="text" class="form-control" name="order_number">
                </fieldset>
                <input type="submit" class="form-control" name="search_order">
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
                    <fieldset>
                        <label for="product_category">Catégorie produit</label>
                        <select name="product_category">
                            <?php $this->displayCategory() ?>
                        </select>
                    </fieldset>
                    <fieldset>
                        <label for="product_name">Nom produit</label>
                        <input type="text" class="form-control" name="product_name">
                    </fieldset>
                    <fieldset>
                        <label for="product_description">Description produit</label>
                        <input type="text" class="form-control" name="product_description">
                    </fieldset>
                    <fieldset>
                        <label for="product_color">Couleur</label>
                        <input type="text" class="form-control" name="product_color">
                    </fieldset>
                    <fieldset>
                        <label for="product_fabric">Matière</label>
                        <input type="text" class="form-control" name="product_fabric">
                    </fieldset>
                    <fieldset>
                        <label for="article_price">Prix</label>
                        <input type="number" class="form-control" step="any" name="product_price">
                    </fieldset>
                    <fieldset>
                        <label for="article_code">Code article</label>
                        <input type="number" class="form-control" name="article_code">
                    </fieldset>
                    <input type="submit" name="add_product">
                </form>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">Ajouter un produit</button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <form id="category_form" method="post" action="admin">
                <fieldset>
                    <label for="product_category">Catégorie produit</label>
                    <input type="text" class="form-control" name="category_name">
                    <select name="category_hierarchy">
                        <option>haut</option>
                        <option>bas</option>
                    </select>
                    <input type="submit" name="add_category">
                </fieldset>
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
                        <fieldset>
                            <input type="number" name="article_code">
                        </fieldset>
                        <input type="submit">
                    </form>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">Mettre à jour l'état de stock d'un article</button>
        </h2>
        <div id="collapseSix" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <form id="product_info" method="post" action="admin/productupdate">
                    <fieldset>
                        <input type="number" name="article_code">
                    </fieldset>
                    <input type="submit" name="product_info">
                </form>
            </div>
        </div>
    </div>
</main>
