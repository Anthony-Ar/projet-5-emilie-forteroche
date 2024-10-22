<?php

/**
 * Entité représentant les vues des articles
 */

class ArticleView extends AbstractEntity
{
    private int $idArticle;
    private string $ip;

    /**
     * @return int
     */
    public function getIdArticle() : int
    {
        return $this -> idArticle;
    }

    /**
     * @param int $idArticle
     * @return void
     */
    public function setIdArticle(int $idArticle) : void
    {
        $this -> idArticle = $idArticle;
    }

    /**
     * @return string
     */
    public function getIp() : string
    {
        return $this -> ip;
    }

    /**
     * @param int $ip
     * @return void
     */
    public function setIp(string $ip) : void
    {
        $this -> ip = $ip;
    }
}