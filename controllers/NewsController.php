<?php
include_once ROOT . '/models/News.php';
class NewsController
{
    public function actionIndex()
    {
        $newsList = News::newsList();
        return true;
    }

    public function actionView($id)
    {
        $newsItem = News::newsItem($id);
        return true;
    }
}
