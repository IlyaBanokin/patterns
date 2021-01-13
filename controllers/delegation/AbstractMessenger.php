<?php namespace app\controllers\delegation;


class AbstractMessenger implements MessengerInterface
{
    /**
     * @var string
     */
    protected $sender;

    /**
     * @var string
     */
    protected $recipient;

    /**
     * @var string
     */
    protected $message;

    /**
     * @param string $value
     * @return $this|string
     */
    public function setSender($value)
    {
        $this->sender = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this|string
     */
    public function setRecipient($value)
    {
        $this->recipient = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return mixed|string
     */
    public function setMessage($value)
    {
        $this->message = $value;
    }

    /**
     * @return bool
     */
    public function send()
    {
        return true;
    }
}