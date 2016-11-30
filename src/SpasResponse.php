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

    public function getSchema() : string
    {
        return $this->schema;
    }

    public function setSchema(string $schema) : ParsedResponse
    {
        $this->schema = $schema;

        return $this;
    }

    public function getStatusCode() : int
    {
        return $this->statusCode;
    }

    public function setStatusCode(int $statusCode) : ParsedResponse
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

    public function getHeaders() : HeaderBag
    {
        return $this->headers;
    }

    public function setHeaders(HeaderBag $headers) : ParsedResponse
    {
        $this->headers = $headers;

        return $this;
    }
}
