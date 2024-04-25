<?php

namespace Netflie\WhatsAppCloudApi;

abstract class Request
{
    /**
     * @var string The access token to use for this request.
     */
    private $access_token;

    /**
     * The timeout request.
     *
     * @return int
     */
    private $timeout;

    /**
     * Creates a new Request entity.
     *
     * @param Message               $message
     * @param string                $access_token
     */
    public function __construct(string $access_token, ?int $timeout = null)
    {
        $this->access_token = $access_token;
        $this->timeout = $timeout ?? 60;
    }

    /**
     * Return the headers for this request.
     *
     * @return array
     */
    public function headers(): array
    {
        return [
            'Authorization' => "Bearer $this->access_token",
        ];
    }

    /**
     * Return the access token for this request.
     *
     * @return string
     */
    public function accessToken(): string
    {
        return $this->access_token;
    }

    /**
     * Return the timeout for this request.
     *
     * @return int
     */
    public function timeout(): int
    {
        return $this->timeout;
    }
}
