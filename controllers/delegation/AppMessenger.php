<?php namespace app\controllers\delegation;

/**
 * Class AppMessenger
 * @package app\controllers\delegation
 */
class AppMessenger implements MessengerInterface
{
    /**
     * @var MessengerInterface
     */
    private $messenger;

    /**
     * AppMessenger constructor.
     */
    public function __construct()
    {
        $this->toEmail();
    }

    /**
     * @return string
     */
    public function toEmail()
    {
        $this->messenger = new EmailMessenger();

        return $this;
    }

    /**
     *  @return string
     */
    public function toSms()
    {
        $this->messenger = new SmsMessenger();

        return $this;
    }

    /**
     * @param $value
     * @return MessengerInterface|mixed
     */
    public function setSender($value)
    {
        $this->messenger->setSender($value);

        return $this->messenger;
    }

    /**
     * @param $value
     * @return MessengerInterface|mixed
     */
    public function setRecipient($value)
    {
        $this->messenger->setRecipient($value);

        return $this->messenger;
    }

    /**
     * @param $value
     * @return MessengerInterface|mixed
     */
    public function setMessage($value)
    {
        $this->messenger->setMessage($value);

        return $this->messenger;
    }

    /**
     * @return mixed|void
     */
    public function send()
    {
        $this->messenger->send();
    }
}