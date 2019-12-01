<?php
include_once ROOT . '/models/News.php';
class NewsController
{
    // Выводим шаблон со всеми новостями
    public function actionIndex()
    {
        $newsList = News::newsList();
        include ROOT . '/views/index.php';
        return true;
    }

    // Выводим шаблон с одной новостью
    public function actionView($id)
    {
        $newsItem = News::newsItem($id);
        include ROOT . '/views/single.php';
        return true;
    }
}
