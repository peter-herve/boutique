

<h1>Détails clients</h1>

<div class="container col-6">
    <table  class="table table-light">
        <?php
        if ($data==true)
        {
            foreach ($data as $key=>$value)
            {
                echo "<tr>" . "<td>" . $key . "</td>" . "<td>" . $value . "</td>" . "</tr>";
            }
        }
        else
        {?>
           <p>Pas de résultats<p>
        <?php
        }
        ?>
    </table>
</div>
