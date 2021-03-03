<section>
    <table>
        <?php

        foreach ($this->data as $key => $value)
        {
            echo "<tr>" . "<td>" . $key . "</td>"."<td>" . $value . "</td>" . "</tr>";
        }
        ?>
    </table>


    <form method='post' action="stockupdate">
        <?php
        foreach ($this->data as $key => $value)
        {
            ?>
            <label for text><?=$key?></label>
            <input type='text' name="<?=$key?>" value="<?=$value?>">
            <?php
            $data_to_insert = ["size"=>$key, "stock"=>$value];
            }
        ?>
        <button type=submit name="stock_update"  value="<?=$this->code?>">Valider</button>
    </form>
</section>



