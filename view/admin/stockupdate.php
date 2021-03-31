
<div class="d-flex flex-row justify-content-center">
    <div class="d-flex flex-row justify-content-end col-6 mt-5">
        <div class="container col-5">
            <h3>Stock actuel</h3>
            <table class="table table-light">
                <?php

                foreach ($this->data as $key => $value)
                {
                    echo "<tr>" . "<td>" . $key . "</td>"."<td>" . $value . "</td>" . "</tr>";
                }
                ?>
            </table>
        </div>

        <div class="container col-5 mb-5">
            <h3>Mise à jour</h3>
            <form method='post' action="stockupdate">
                <?php
                foreach ($this->data as $key => $value)
                {
                    ?>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><?=$key?></span>
                    <input class="form-control" type='text' name="<?=$key?>" value="<?=$value?>">
                </div>
                    <?php
                    $data_to_insert = ["size"=>$key, "stock"=>$value];
                    }
                ?>
                <button type=submit class="btn btn-dark" name="stock_update"  value="<?=$this->code?>">Valider</button>
            </form>
        </div>
    </div>
</div>

