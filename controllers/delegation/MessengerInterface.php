<?php namespace app\controllers\delegation;

interface MessengerInterface
{
    /**
     * @param $value
     * @return mixed
     */
    public function setSender($value);

    /**
     * @param $value
     * @return mixed
     */
    public function setRecipient($value);

    /**
     * @param $value
     * @return mixed
     */
    public function setMessage($value);

    /**
     * @return mixed
     */
    public function send();
}