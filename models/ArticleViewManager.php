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
}
