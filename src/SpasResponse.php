<?php

namespace Hmaus\Spas\Parser;

use Symfony\Component\HttpFoundation\HeaderBag;

class SpasResponse implements ParsedResponse
{
    /**
     * @var HeaderBag
     */
    public $headers;

    /**
     * json schema
     * @var string
     */
    private $schema = '';

    /**
     * HTTP Response Code
     * @var int
     */
    private $statusCode = 0;

    /**
     * @var string
     */
    private $body = '';

    public function __construct()
    {
        $this->headers = new HeaderBag();
    }

    public function getSchema()
    {
        return $this->schema;
    }

    public function setSchema($schema)
    {
        $this->schema = $schema;

        return $this;
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function setHeaders(HeaderBag $headers)
    {
        $this->headers = $headers;

        return $this;
    }
}
