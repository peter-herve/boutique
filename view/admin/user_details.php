

<h1>Détails clients</h1>

<div class="container col-6">
    <table  class="table table-light">
        <?php
        foreach ($data as $key=>$value)
        {
            echo "<tr>" . "<td>" . $key . "</td>" . "<td>" . $value . "</td>" . "</tr>";
        }
        ?>
    </table>
</div>
