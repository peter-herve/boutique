

<h1>Détails clients</h1>
<section>
    <table>
        <?php
        foreach ($data as $key=>$value)
        {
            echo "<tr>" . "<td>" . $key . "</td>" . "<td>" . $value . "</td>" . "</tr>";
        }
        ?>
    </table>
</section>
