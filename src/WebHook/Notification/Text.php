<?php

namespace terror\WhatsAppCloudApi\WebHook\Notification;

final class Text extends MessageNotification
{
    private $message;

    public function __construct(string $id, Support\Business $business, string $message, string $received_at_timestamp)
    {
        parent::__construct($id, $business, $received_at_timestamp);

        $this->message = $message;
    }

    public function message(): string
    {
        return $this->message;
    }
}
