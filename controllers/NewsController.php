<?php

class NewsController
{
    public function actionIndex()
    {
        echo "Вывод всех новостей";
        return true;
    }

    public function actionView($id)
    {
        echo "Вывод новости под номером $id";
        return true;
    }
}
