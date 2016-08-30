<?php
/**
 * Interface to be implemented by concrete parse result adapters
 *
 * Goes hand in hand with a concrete Parser implementation to turn any
 * parsed API description into an array of ParsedRequest's.
 */

namespace Hmaus\SpasParser;

interface ParserAdapter
{
    /**
     * Adapt the parsed API description to an array of ParsedRequest's
     *
     * @param mixed $parsedApiDescription Readily parsed API Description by concrete Parser implementation
     * @param array $options Custom options to pass on the adapter
     * @return ParsedRequest[]
     */
    public function buildParsedRequests($parsedApiDescription, array $options);
}