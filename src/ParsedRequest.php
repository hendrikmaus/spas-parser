<?php
/**
 * Used by spas to fire requests
 */

namespace Hmaus\SpasParser;

use Symfony\Component\HttpFoundation\HeaderBag;
use Symfony\Component\HttpFoundation\ParameterBag;

interface ParsedRequest
{
    /**
     * Set request name
     * @param string $name
     * @return ParsedRequest
     */
    public function setName($name);

    /**
     * Append to the request name
     * @param string $append What you want to append to the name
     * @param string $separator
     * @return ParsedRequest
     * @internal param string $name
     */
    public function appendToName($append, $separator = ' > ');

    /**
     * Get request name
     * @return string
     */
    public function getName();

    /**
     * Set base url, e.g. https://example.com w/o trailing slash
     * @param string $url
     * @return ParsedRequest
     */
    public function setBaseUrl($url);

    /**
     * Get the base url
     * @return string
     */
    public function getBaseUrl();

    /**
     * Set href
     * @param string $href
     * @return ParsedRequest
     */
    public function setHref($href);

    /**
     * Get href, e.g. /example/{param}
     * @return string
     */
    public function getHref();

    /**
     * Set message payload
     * @param string $content
     * @return ParsedRequest
     */
    public function setContent($content);

    /**
     * Get message body
     * @return string|null
     */
    public function getContent();

    /**
     * Set HTTP method to use for the request
     * @param string $method
     * @return ParsedRequest
     */
    public function setMethod($method);

    /**
     * Get HTTP method
     * @return string
     */
    public function getMethod();

    /**
     * Whether or not the request is enabled
     * @return boolean
     */
    public function isEnabled();

    /**
     * Enable/disable request
     * @param boolean $enabled
     * @return ParsedRequest
     */
    public function setEnabled($enabled);

    /**
     * Get response
     * @return ParsedResponse
     */
    public function getResponse();

    /**
     * Set response for this request
     * @param ParsedResponse $response
     * @return ParsedRequest
     */
    public function setResponse(ParsedResponse $response);

    /**
     * Get header bag
     * @return HeaderBag
     */
    public function getHeaders();

    /**
     * Replace entire header bag
     * @param HeaderBag $headers
     * @return ParsedRequest
     */
    public function setHeaders(HeaderBag $headers);

    /**
     * Get parameter bag
     * @return ParameterBag
     */
    public function getParams();

    /**
     * Replace the entire parameter bag
     * @param ParameterBag $params
     * @return ParsedRequest
     */
    public function setParams(ParameterBag $params);
}