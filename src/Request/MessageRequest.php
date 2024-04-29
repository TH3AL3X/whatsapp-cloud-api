<?php

namespace terror\WhatsAppCloudApi\Request;

use terror\WhatsAppCloudApi\Message\Message;
use terror\WhatsAppCloudApi\Request;

abstract class MessageRequest extends Request implements RequestWithBody
{
    /**
     * @var Message WhatsApp Message to be sent.
     */
    protected $message;

    /**
     * @var string WhatsApp Number Id from messages will sent.
     */
    private $from_phone_number_id;

    public function __construct(Message $message, string $access_token, string $from_phone_number_id, ?int $timeout = null)
    {
        $this->message = $message;
        $this->from_phone_number_id = $from_phone_number_id;

        parent::__construct($access_token, $timeout);
    }

    /**
     * Return WhatsApp Number Id for this request.
     *
     * @return string
     */
    public function fromPhoneNumberId(): string
    {
        return $this->from_phone_number_id;
    }

    /**
     * WhatsApp node path.
     *
     * @return string
     */
    public function nodePath(): string
    {
        return $this->from_phone_number_id . '/messages';
    }
}
