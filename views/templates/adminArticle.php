<a href="index.php?action=admin" class="menu_admin_link">Édition des articles</a>

<h2>Liste des articles en ligne</h2>

<div class="adminArticle">
    <table>
        <thead>
        <tr class="head">
            <th scope="col">Titre de l'article</th>
            <th scope="col">Date de publication</th>
            <th scope="col">Nombre de commentaires</th>
            <th scope="col">Nombre de vues</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $article) { ?>
            <tr>
                <td><?= $article['article']->getTitle() ?></td>
                <td><?= $article['date'] ?></td>
                <td><?= $article['comment'] ?></td>
                <td><?= $article['view']['total_unique_view'] ?> (total : <?= $article['view']['total_view'] ?>)</td>
                <td><a href="#" class="table_link">Afficher les commentaires</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
