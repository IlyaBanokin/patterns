<?php namespace app\controllers;

use app\controllers\delegation\AppMessenger;
use app\models\BlogPost;
use yii\web\Controller;

/**
 * Class PattersController
 * @package app\controllers
 */
class PatternsController extends Controller
{
    /**
     * @return int
     */
    public function actionIndex()
    {
        return 'Hello Page';
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

    /**
     *
     */
    public function actionDelegation()
    {
        $item = new AppMessenger();

        $item->setSender('admin@admin.ru')
            ->setRecipient('user@user.ru')
            ->setMessage('Send To Email')
            ->send();

        $item->toSms()
            ->setSender('admin2@admin.ru')
            ->setRecipient('user2@user.ru')
            ->setMessage('Send To SMS')
            ->send();
    }
}