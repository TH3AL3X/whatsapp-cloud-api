<?php

namespace terror\WhatsAppCloudApi\Request\MessageRequest;

use terror\WhatsAppCloudApi\Request\MessageRequest;

final class RequestAudioMessage extends MessageRequest
{
    /**
    * {@inheritdoc}
    */
    public function body(): array
    {
        $body = [
            'messaging_product' => $this->message->messagingProduct(),
            'recipient_type' => $this->message->recipientType(),
            'to' => $this->message->to(),
            'type' => $this->message->type(),
            'audio' => [
                $this->message->identifierType() => $this->message->identifierValue(),
            ],
        ];

        if ($this->message->replyTo()) {
            $body['context']['message_id'] = $this->message->replyTo();
        }

        return $body;
    }
}
