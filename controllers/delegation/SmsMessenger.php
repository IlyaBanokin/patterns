<?php namespace app\controllers\delegation;

class SmsMessenger extends AbstractMessenger
{
    /**
     * @return bool
     */
    public function send()
    {
        var_dump('Send by' . __METHOD__);

        return parent::send();
    }
}