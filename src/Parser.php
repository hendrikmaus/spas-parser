<?php
/**
 * Implement this interface to create a concrete API description parser
 *
 * In addition, create an adapter implementation to turn your
 * parse result into an array of ParsedRequest's.
 */

namespace Hmaus\SpasParser;

interface Parser
{
    /**
     * Parse API Description to PHP data structure
     *
     * @param array $description API Description as PHP assoc array
     * @return object Output depends on the concrete parser; will be bridged by a ParserAdapter implementation
     */
    public function parse(array $description);
}