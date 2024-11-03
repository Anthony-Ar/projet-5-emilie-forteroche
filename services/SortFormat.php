<?php

class SortFormat
{
    /**
     * Permet de générer et de gérer le trie par champ dans un tableau de données
     * @param array|null $sort
     * @param string $column
     * @param string $columnSort
     * @return string
     */
    public static function generate(?array $sort, string $column, string $columnSort) : string
    {
        $type = "desc";
        $icon = "up";

        if($sort !== null) {
            $order = $sort[0];
            $type = $sort[1];
            $icon = $type == "asc" && $columnSort == $order ? "up" : "down";
        }

        $nextSort = $type == "asc" ? "desc" : "asc";

        return "<a href=\"index.php?action=adminArticle&sort={$columnSort}:{$nextSort}\">
                    {$column}
                    <i class=\"fa-solid fa-circle-chevron-{$icon}\"></i>
                </a>";
    }
}