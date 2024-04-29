<?php

namespace terror\WhatsAppCloudApi\WebHook\Notification;

final class Media extends MessageNotification
{
    private $image_id;

    private $mime_type;

    private $sha256;

    private $filename;

    private $caption;

    public function __construct(
        string $id,
        Support\Business $business,
        string $image_id,
        string $mime_type,
        string $sha256,
        string $filename,
        string $caption,
        string $received_at_timestamp
    ) {
        parent::__construct($id, $business, $received_at_timestamp);

        $this->image_id = $image_id;
        $this->mime_type = $mime_type;
        $this->sha256 = $sha256;
        $this->filename = $filename;
        $this->caption = $caption;
    }

    public function imageId(): string
    {
        return $this->image_id;
    }

    public function mimeType(): string
    {
        return $this->mime_type;
    }

    public function sha256(): string
    {
        return $this->sha256;
    }

    public function filename(): string
    {
        return $this->filename;
    }

    public function caption(): string
    {
        return $this->caption;
    }
}
