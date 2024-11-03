<a href="index.php?action=admin" class="menu_admin_link">Édition des articles</a>

<h2>Liste des articles en ligne</h2>

<div class="adminArticle">
    <table>
        <thead>
        <tr class="head">
            <th scope="col">
                <?= SortFormat::generate($sort, "Titre de l'article", "title") ?>
            </th>
            <th scope="col">
                <?= SortFormat::generate($sort, "Date de publication", "date_creation") ?>
            </th>
            <th scope="col">
                <?= SortFormat::generate($sort, "Nombre de commentaires", "comments") ?>
            </th>
            <th scope="col">
                <?= SortFormat::generate($sort, "Nombre de vues", "views") ?>
            </th>
            <th scope="col">
                Action
            </th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($articles as $article) { ?>
            <tr>
                <td><?= $article['article']->getTitle() ?></td>
                <td><?= Utils::convertDateToFrenchFormat($article['article']->getDateCreation()) ?></td>
                <td><?= $article['comments'] ?></td>
                <td><?= $article['unique_views'] ?> (total : <?= $article['views'] ?>)</td>
                <td>
                    <a href="index.php?action=showArticle&id=<?= $article['article']->getId() ?>" class="table_link">
                        <i class="fa-solid fa-eye"></i>
                        Accéder à l'article
                    </a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
