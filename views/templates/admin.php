<?php 
    /** 
     * Affichage de la partie admin : liste des articles avec un bouton "modifier" pour chacun. 
     * Et un formulaire pour ajouter un article. 
     */
?>
<a href="index.php?action=adminArticle" class="menu_admin_link">Liste des articles en ligne</a>

<h2>Edition des articles</h2>

<div class="adminArticle">
    <?php foreach ($articles as $article) { ?>
        <div class="articleLine">
            <div class="title"><?= $article['article']->getTitle() ?></div>
            <div class="content"><?= $article['article']->getContent(200) ?></div>
            <div><a class="submit" href="index.php?action=showUpdateArticleForm&id=<?= $article['article']->getId() ?>">Modifier</a></div>
            <div><a class="submit" href="index.php?action=deleteArticle&id=<?= $article['article']->getId() ?>" <?= Utils::askConfirmation("Êtes-vous sûr de vouloir supprimer cet article ?") ?> >Supprimer</a></div>
        </div>
    <?php } ?>
</div>

<a class="submit" href="index.php?action=showUpdateArticleForm">Ajouter un article</a>
