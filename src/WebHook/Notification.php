<?php

namespace terror\WhatsAppCloudApi\WebHook;

use terror\WhatsAppCloudApi\WebHook\Notification\Support;

abstract class Notification
{
    private $id;

    private $business;

    private $received_at;

    public function __construct(string $id, Support\Business $business, string $received_at_timestamp)
    {
        $this->id = $id;
        $this->business = $business;
        $this->received_at = (new \DateTimeImmutable())->setTimestamp($received_at_timestamp);
    }

    public function id(): string
    {
        return $this->id;
    }

    public function businessPhoneNumberId(): string
    {
        return $this->business->phoneNumberId();
    }

    public function businessPhoneNumber(): string
    {
        return $this->business->phoneNumber();
    }

    public function receivedAt(): \DateTimeImmutable
    {
        return $this->received_at;
    }
}
