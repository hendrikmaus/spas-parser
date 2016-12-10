<?php
/**
 * Parsed response contained within ParsedRequest's
 */

namespace Hmaus\Spas\Parser;

use Symfony\Component\HttpFoundation\HeaderBag;

interface ParsedResponse
{
    /**
     * Get message body schema
     * @return string
     */
    public function getSchema() : string;

    /**
     * Set message body schema
     * @param string $schema
     * @return ParsedResponse
     */
    public function setSchema(string $schema) : ParsedResponse;

    /**
     * Get HTTP status code
     * @return int
     */
    public function getStatusCode() : int;

    /**
     * Set HTTP status code
     * @param int $statusCode
     * @return ParsedResponse
     */
    public function setStatusCode(int $statusCode) : ParsedResponse;

    /**
     * Get response body
     * @return mixed|string|null
     */
    public function getBody();

    /**
     * Set the response body
     * @param mixed|string|null $body
     * @return ParsedResponse
     */
    public function setBody($body);

    /**
     * Get header bag
     * @return HeaderBag
     */
    public function getHeaders() : HeaderBag;

    /**
     * Replace entire header bag
     * @param HeaderBag $headers
     * @return ParsedResponse
     */
    public function setHeaders(HeaderBag $headers) : ParsedResponse;

    /**
     * Gets the response reason phrase associated with the status code.
     * @return string
     */
    public function getReasonPhrase() : string;

    /**
     * Sets the response reason phrase.
     * @param string $reasonPhrase
     * @return ParsedResponse
     */
    public function setReasonPhrase(string $reasonPhrase) : ParsedResponse;
}
