<?php

class Mail {
    private $name;
    private $sender;
    private $recipient;
    private $object;
    private $message;

    public function __construct ($name, $sender, $recipient, $object, $message) {
        $this->setName(trim(strip_tags($name)));
        $this->setSender(trim(strip_tags($sender)));
        $this->setRecipient(trim(strip_tags($recipient)));
        $this->setObject(trim(strip_tags($object)));
        $this->setMessage(trim(strip_tags($message)));
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * @param mixed $recipient
     */
    public function setRecipient($recipient): void
    {
        $this->recipient = $recipient;
    }

    /**
     * @return mixed
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param mixed $sender
     */
    public function setSender($sender): void
    {
        $this->sender = $sender;
    }

    /**
     * @return mixed
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param mixed $object
     */
    public function setObject($object): void
    {
        $this->object = $object;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message): void
    {
        $this->message = $message;
    }

    public function sendMail(): void {
        mail($this->name, $this->sender, $this->recipient, $this->object, $this->message);
    }
}




