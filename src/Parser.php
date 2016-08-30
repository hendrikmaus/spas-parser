<?php
/**
 * Implement this interface to create a concrete API description parser
 */

namespace Hmaus\SpasParser;

interface Parser
{
    /**
     * Parse API Description to PHP data structure
     *
     * @param array $apiDescription API Description as raw PHP assoc array
     * @return ParsedRequest[]
     */
    public function parse(array $apiDescription);
}