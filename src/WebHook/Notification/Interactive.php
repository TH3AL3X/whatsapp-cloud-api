<?php

namespace terror\WhatsAppCloudApi\WebHook\Notification;

final class Interactive extends MessageNotification
{
    private $item_id;

    private $title;

    private $description;

    public function __construct(
        string $id,
        Support\Business $business,
        string $item_id,
        string $title,
        string $description,
        string $received_at_timestamp
    ) {
        parent::__construct($id, $business, $received_at_timestamp);

        $this->item_id = $item_id;
        $this->title = $title;
        $this->description = $description;
    }

    public function itemId(): string
    {
        return $this->item_id;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function description(): string
    {
        return $this->description;
    }
}
