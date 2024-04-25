<?php

namespace Netflie\WhatsAppCloudApi\Message;

use Netflie\WhatsAppCloudApi\Message\ButtonReply\ButtonAction;

class ButtonReplyMessage extends Message
{
    protected $type = 'button';

    private $header;

    private $body;

    private $footer;

    private $action;

    public function __construct(string $to, string $body, ButtonAction $action, ?string $header = null, ?string $footer = null, ?string $reply_to = null)
    {
        $this->body = $body;
        $this->action = $action;
        $this->header = $header;
        $this->footer = $footer;

        parent::__construct($to, $reply_to);
    }

    public function header(): ?string
    {
        return $this->header;
    }

    public function body(): string
    {
        return $this->body;
    }

    public function action(): ButtonAction
    {
        return $this->action;
    }

    public function footer(): ?string
    {
        return $this->footer;
    }
}
