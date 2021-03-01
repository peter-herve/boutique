<?php

class StockUpdate{

    public $stock = [];
    public $size = [];
    public $tab;

    public function __construct($tab)
    {
        var_dump($tab);
        $this->article_name = $tab[0]['article_name'];
        $this->article_price = $tab[0]['article_price'];
        $this->article_code = $tab[0]['article_code'];
        $this->foreachSize($tab);
        $this->stockVisu($tab);

        ob_start();
        echo "lejfbekfjcnekc,enck";
        $this->main =  ob_get_clean();

        $view = new View('stockupdate');
        $view->sendMain($this->main);

    }


    public function foreachSize($tab)
    {
        for($i=0;isset($tab[$i]);$i++)
        {
            array_push($this->size, $tab[$i]['article_size']);
            array_push($this->stock, $tab[$i]['stock']);
        }
        $this->data=array_combine($this->size,$this->stock);
    }

    public function stockVisu($tab)
    {
        echo "<table>";
        for ($i=0; isset($tab[$i]); $i++)
        {
        echo "<tr>" . "<td>" . $tab[$i]['article_size'] ."</td>" . "<td>" . $tab[$i]['stock'] . "</td>" . "</tr>";
        }
        echo "</table>";
    }

    public function formvisu($tab)
    {
        echo "<form method='get'>";
        for ($i=0; isset($tab[$i]); $i++)
        {
            $label = $tab[$i]['article_size'];
            $data = $tab[$i]['stock'];
            echo "<label for=$label>" . $label;
            echo "<input type='text' name=$label value=$data>";
        }
        echo "<input type=submit name='$this->article_code'>";
        echo "</form>";
    }

}
