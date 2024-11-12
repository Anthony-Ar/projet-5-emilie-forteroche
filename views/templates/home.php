<?php
    /**
     * Affichage de Liste des articles. 
     */
?>

<div class="articleList">
    <?php foreach($articles as $article) { ?>
        <article class="article">
            <h2><?= $article['article']->getTitle() ?></h2>
            <span class="quotation">«</span>
            <p><?= $article['article']->getContent(400) ?></p>
            
            <div class="footer">
                <span class="info"> <?= ucfirst(Utils::convertDateToFrenchFormat($article['article']->getDateCreation())) ?></span>
                <a class="info" href="index.php?action=showArticle&id=<?= $article['article']->getId() ?>">Lire +</a>
            </div>
        </article>
    <?php } ?>
</div>