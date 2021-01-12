<?php namespace app\controllers\property;


use yii\web\NotFoundHttpException;

class PropertyContainer implements PropertyContainerInterface
{
    /**
     * @var array
     */
    private $propertyContainer = [];

    /**
     * @param $propertyName
     * @param $value
     * @return mixed
     */
    public function addProperty($propertyName, $value)
    {
        return $this->propertyContainer[$propertyName] = $value;
    }

    /**
     * @param $propertyName
     * @param $value
     * @return mixed|void
     * @throws NotFoundHttpException
     */
    public function updateProperty($propertyName, $value)
    {
        $this->checkProperty($propertyName);
        $this->addProperty($propertyName, $value);
    }

    /**
     * @param $propertyName
     * @return mixed
     * @throws NotFoundHttpException
     */
    public function getProperty($propertyName)
    {
        $this->checkProperty($propertyName);
        return $this->propertyContainer[$propertyName];
    }

    /**
     * @param $propertyName
     * @return mixed|void
     * @throws NotFoundHttpException
     */
    public function deleteProperty($propertyName)
    {
        $this->checkProperty($propertyName);
        unset($this->propertyContainer[$propertyName]);
    }

    /**
     * @param $propertyName
     */
    private function checkProperty($propertyName)
    {
        if (!isset($this->propertyContainer[$propertyName])) {
            throw new NotFoundHttpException();
        }
    }
}