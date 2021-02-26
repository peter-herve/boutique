<main>
<form method='get'>
    <?php foreach ($tab as $article)
        $label = $tab[$i]['article_size'];
        $data = $tab[$i]['stock'];
        ?>
        <label for=$label> <?= $article['article_size'] ?>
        <input type='text' name=$label value=<?= $data['stock'];?>
    <input type=submit name=<?= $_SESSION['user']['article_code']?>>
    </form>;
</main>


