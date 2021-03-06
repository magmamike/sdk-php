<?php

namespace FedExCrossBorder\Auth;

class Credentials
{
    /**
     * The API Client ID.
     *
     * @var string
     */
    private $clientId;

    /**
     * The API Client Secret.
     *
     * @var string
     */
    private $clientSecret;

    /**
     * The Partner Key.
     *
     * @var string
     */
    private $partnerKey;

    /**
     * Constructor.
     *
     * @param string $clientId The API Client ID.
     * @param string $clientSecret The API Client key.
     * @param string $partnerKey The Partner Key.
     */
    public function __construct($clientId, $clientSecret, $partnerKey)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->partnerKey = $partnerKey;
    }
    /**
     * Returns the Client ID.
     *
     * @return string The client ID.
     */
    public function getClientId()
    {
        return $this->clientId;
    }
    /**
     * Returns the API Client Secret.
     *
     * @return string The API Client Secret.
     */
    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    /**
     * Returns the Partner Key.
     *
     * @return string The Partner Key.
     */
    public function getPartnerKey()
    {
        return $this->partnerKey;
    }

}
