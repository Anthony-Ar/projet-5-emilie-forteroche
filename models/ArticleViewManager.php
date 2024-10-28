<?php

/**
 * Cette classe sert à gérer les vues des articles.
 */
class ArticleViewManager extends AbstractEntityManager
{
    /**
     * Ajoute une vue à un article.
     * @param ArticleView $article
     * @return bool
     */
    public function addView(ArticleView $article) : bool
    {
        $sql = "INSERT INTO articleView (article_id, ip) VALUES (:article_id, :ip)";
        $result = $this->db->query($sql, [
            'article_id' => $article->getIdArticle(),
            'ip' => $article->getIp(),
        ]);
        return $result->rowCount() > 0;
    }

    /**
     * Compte le nombre de vues d'un article.
     * @param int $articleId
     * @return array
     */
    public function countView(int $articleId) : array
    {
        $sql = "SELECT COUNT(*) AS total_view, COUNT(DISTINCT ip) AS total_unique_view
            FROM articleview
            WHERE article_id = :article_id";
        $result = $this->db->query($sql, ['article_id' => $articleId]);

        return $result->fetch(PDO::FETCH_ASSOC);
    }
}
