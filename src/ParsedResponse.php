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
    public function getSchema();

    /**
     * Set message body schema
     * @param string $schema
     * @return ParsedResponse
     */
    public function setSchema($schema);

    /**
     * Get HTTP status code
     * @return int
     */
    public function getStatusCode();

    /**
     * Set HTTP status code
     * @param int $statusCode
     * @return ParsedResponse
     */
    public function setStatusCode($statusCode);

    /**
     * Get response body
     * @return string
     */
    public function getBody();

    /**
     * Set the response body
     * @param string $body
     * @return ParsedResponse
     */
    public function setBody($body);

    /**
     * Get header bag
     * @return HeaderBag
     */
    public function getHeaders();

    /**
     * Replace entire header bag
     * @param HeaderBag $headers
     * @return ParsedResponse
     */
    public function setHeaders(HeaderBag $headers);
}
