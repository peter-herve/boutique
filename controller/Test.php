<?php

/**
 *
 */
class Test extends Routeur
{
	private $search_tables = ['category', 'fabric', 'colors', 'modeles', 'products'];
	private $search_box;

	function __construct()
	{
		echo "<pre>";
		var_dump($_POST);
		echo "</pre>";
		$this->checkPost();
		$this->initialize_search_box();
		$view = new View('Test');
		$view->sendMain($this->content);
		$view->render();
	}

	public function checkPost()
	{
		if (isset($_POST['add_product'])) {
			$product = new ProductManager([$_POST['model_id'], $_POST['size_id'], $_POST['stock']]);
			$product->add();
		}
	}

	public function initialize_search_box()
	{
		// foreach ($this->search_tables as $table) {
		// 	$this->selectAll($table);
		// }
		// echo "<pre>";

		$categories = new Request();
		$categories = $categories->selectAll('category');
		$fabrics = new Request();
		$fabrics = $fabrics->selectAll('fabric');
		$colors = new Request();
		$colors = $colors->selectAll('colors');
		$modeles = new Request();
		$modeles = $modeles->selectAll('modeles');
		$products = new Request();
		$products = $products->selectAll('products');
		$sizes = new Request();
		$sizes = $sizes->selectAll('sizes');
		$brand = new Request();
		$brand = $brand->selectAll('brand');
		$this->search_box = [	"categories" 	=> $categories,
								"fabrics"		=> $fabrics,
								"colors"		=> $colors,
								"modeles"		=> $modeles,
								"sizes"			=> $sizes,
								"products"		=> $products
							];
		ob_start();
		include(VIEW.'test.php');
		$this->content = ob_get_clean();
	}



	// public function selectAll($table)
	// {
	// 	$ret = new Request();
	// 	$ret = $ret->selectAll($table);
	// 	$this->search_box[]= [$table => $ret];
	// }

}
// SELECT * FROM colored INNER JOIN colors ON colored.color_id = colors.id
//
// SELECT * FROM (colored INNER JOIN colors ON colored.color_id = colors.id) INNER JOIN models ON colored.model_id = models.id
//
// SELECT models.name, models.description, colors.name FROM (colored INNER JOIN colors ON colored.color_id = colors.id) INNER JOIN models ON colored.model_id = models.id
//
// SELECT * FROM
// (models INNER JOIN categorized ON models.categorized_id = categorized.id)
// INNER JOIN category ON category_id = category.id
//
// SELECT * FROM
// ((models INNER JOIN categorized ON models.categorized_id = categorized.id) INNER JOIN category ON category_id = category.id) INNER JOIN colors on colored_id = color.id
