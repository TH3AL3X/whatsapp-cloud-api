<?php

namespace terror\WhatsAppCloudApi\Message;

use terror\WhatsAppCloudApi\Message\Media\MediaID;

final class VideoMessage extends Message
{
    /**
    * {@inheritdoc}
    */
    protected $type = 'video';

    /**
     * Describes the specified document.
     */
    private $caption;

    /**
    * Document identifier: WhatsApp Media ID or any Internet public link document.
    *
    * You can get a WhatsApp Media ID uploading the document to the WhatsApp Cloud servers.
    */
    private MediaID $id;

    /**
    * {@inheritdoc}
    */
    public function __construct(string $to, MediaID $id, ?string $caption = '', ?string $reply_to = null)
    {
        $this->id = $id;
        $this->caption = $caption;

        parent::__construct($to, $reply_to);
    }

    public function caption(): ?string
    {
        return $this->caption;
    }

    public function identifierType(): string
    {
        return $this->id->type();
    }

    public function identifierValue(): string
    {
        return $this->id->value();
    }
}
