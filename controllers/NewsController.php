<?php


class NewsController
{

    public function actionIndex()
    {
        echo "Просмотр списка новостей";
        return true;
    }

    public function actionView()
    {
        echo "Просмотр одной новости!";
        return true;
    }

}
