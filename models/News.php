<?php

class News
{
    // Получаем список новостей из бд
    static public function newsList()
    {
        $db = DB::getConnect();
        $query = $db->query("SELECT title, short_content, date,
         author, preview, content FROM news");
        return $newsList = $query->fetchAll(PDO::FETCH_ASSOC);
    }

    // Получаем новость по id из бд
    static public function newsItem($id)
    {
        $db = DB::getConnect();
        $query = $db->prepare("SELECT title, short_content, date,
         author, preview, content FROM news
         WHERE id = :id ORDER BY date DESC
        ");
        $query->bindParam(':id', $id);
        $query->execute();
        return $newsItem = $query->fetch(PDO::FETCH_ASSOC);
    }
}
