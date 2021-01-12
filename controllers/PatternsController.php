<?php namespace app\controllers;

use app\models\BlogPost;
use yii\web\Controller;

/**
 * Class PattersController
 * @package app\controllers
 */
class PatternsController extends Controller
{
    public function actionIndex()
    {
        return 123;
    }

    /**
     * @return string
     * @throws \yii\web\NotFoundHttpException
     */
    public function actionFundamental()
    {
        $item = new BlogPost();

        $item->setTitle('Заголовок статьи');
        $item->setCategory(100);

        $item->addProperty('newProperty', 1);

        $item->addProperty('editProperty', 100);
        $item->updateProperty('editProperty', 50);

        $item->addProperty('DeleteProperty', 100);
        $item->deleteProperty('DeleteProperty');

        return $this->render('property', [
            'blogPost' => $item,
        ]);

    }
}