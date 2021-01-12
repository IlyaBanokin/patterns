<?php namespace app\controllers\property;


interface PropertyContainerInterface
{
    /**
     * @param $propertyName
     * @param $value
     * @return mixed
     */
    public function addProperty($propertyName, $value);

    /**
     * @param $propertyName
     * @param $value
     * @return mixed
     */
    public function updateProperty($propertyName, $value);

    /**
     * @param $propertyName
     * @return mixed
     */
    public function getProperty($propertyName);

    /**
     * @param $propertyName
     * @return mixed
     */
    public function deleteProperty($propertyName);
}