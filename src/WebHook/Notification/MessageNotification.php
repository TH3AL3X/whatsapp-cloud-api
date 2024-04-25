<?php

namespace Netflie\WhatsAppCloudApi\WebHook\Notification;

use Netflie\WhatsAppCloudApi\WebHook\Notification;

abstract class MessageNotification extends Notification
{
    protected $context = null;

    protected $customer = null;

    protected $referral = null;

    public function customer()
    {
        return $this->customer;
    }

    public function replyingToMessageId()
    {
        if (!$this->context) {
            return null;
        }

        return $this->context->replyingToMessageId();
    }

    public function isForwarded()
    {
        if (!$this->context) {
            return false;
        }

        return $this->context->isForwarded();
    }

    public function context()
    {
        return $this->context;
    }

    public function referral()
    {
        return $this->referral;
    }

    public function withContext($context)
    {
        $this->context = $context;

        return $this;
    }

    public function withReferral($referral)
    {
        $this->referral = $referral;

        return $this;
    }

    public function withCustomer($customer)
    {
        $this->customer = $customer;

        return $this;
    }
}
