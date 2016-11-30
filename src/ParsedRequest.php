<?php
/**
 * Used by spas to fire requests
 */

namespace Hmaus\Spas\Parser;

use Hmaus\Reynaldo\Elements\ApiResourceGroup;
use Hmaus\Spas\Parser\Options\Repetition;
use Symfony\Component\HttpFoundation\HeaderBag;
use Symfony\Component\HttpFoundation\ParameterBag;

interface ParsedRequest
{
    /**
     * Set request name
     * @param string $name
     * @return ParsedRequest
     */
    public function setName(string $name) : ParsedRequest;

    /**
     * Set request resource group
     * @param ApiResourceGroup $resourceGroup
     * @return ParsedRequest
     */
    public function setResourceGroup(ApiResourceGroup $resourceGroup) : ParsedRequest;

    /**
     * Append to the request name
     * @param string $append What you want to append to the name
     * @param string $separator
     * @return ParsedRequest
     */
    public function appendToName(string $append, string $separator = ' > ') : ParsedRequest;

    /**
     * Get request name
     * @return string
     */
    public function getName() : string;

    /**
     * Get request resource group
     * @return ApiResourceGroup
     */
    public function getResourceGroup() : ApiResourceGroup;

    /**
     * Set base url, e.g. https://example.com w/o trailing slash
     * @param string $url
     * @return ParsedRequest
     */
    public function setBaseUrl(string $url) : ParsedRequest;

    /**
     * Get the base url
     * @return string
     */
    public function getBaseUrl() : string;

    /**
     * Set href
     * In your parser implementation, you do not need to set
     * this property as spas will set it when expanding the uri template.
     *
     * @param string $href
     * @return ParsedRequest
     */
    public function setHref(string $href) : ParsedRequest;

    /**
     * Get href, e.g. /example
     * @return string
     */
    public function getHref() : string;

    /**
     * Set uri template
     * @param string $template
     * @return ParsedRequest
     */
    public function setUriTemplate(string $template) : ParsedRequest;

    /**
     * Get uri template, e.g. /example/{param}
     * @return string
     */
    public function getUriTemplate() : string;

    /**
     * Set message payload
     * @param mixed|string $content
     * @return ParsedRequest
     */
    public function setContent($content) : ParsedRequest;

    /**
     * Get message body
     * @return mixed|string|null
     */
    public function getContent();

    /**
     * Set HTTP method to use for the request
     * @param string $method
     * @return ParsedRequest
     */
    public function setMethod(string $method) : ParsedRequest;

    /**
     * Get HTTP method
     * @return string
     */
    public function getMethod() : string;

    /**
     * Whether or not the request is enabled
     * @return boolean
     */
    public function isEnabled() : bool;

    /**
     * Enable/disable request
     * @param boolean $enabled
     * @return ParsedRequest
     */
    public function setEnabled(bool $enabled) : ParsedRequest;

    /**
     * Get response
     * @return ParsedResponse
     */
    public function getExpectedResponse() : ParsedResponse;

    /**
     * Set response for this request
     * @param ParsedResponse $response
     * @return ParsedRequest
     */
    public function setExpectedResponse(ParsedResponse $response) : ParsedRequest;

    /**
     * Get header bag
     * @return HeaderBag
     */
    public function getHeaders() : HeaderBag;

    /**
     * Replace entire header bag
     * @param HeaderBag $headers
     * @return ParsedRequest
     */
    public function setHeaders(HeaderBag $headers) : ParsedRequest;

    /**
     * Get parameter bag
     * @return ParameterBag
     */
    public function getParams() : ParameterBag;

    /**
     * Replace the entire parameter bag
     * @param ParameterBag $params
     * @return ParsedRequest
     */
    public function setParams(ParameterBag $params) : ParsedRequest;

    /**
     * Get the actual response
     * todo once php 7.1 is out, use the `?ParsedResponse` syntax for nullable type hints
     * @return ParsedResponse
     */
    public function getActualResponse();

    /**
     * Set the actual response
     * @param ParsedResponse $actualResponse
     * @return ParsedRequest
     */
    public function setActualResponse(ParsedResponse $actualResponse) : ParsedRequest;

    /**
     * @return Repetition
     */
    public function getRepetitionConfig() : Repetition;

    /**
     * @param Repetition $config
     * @return ParsedRequest
     */
    public function setRepetitionConfig(Repetition $config) : ParsedRequest;
}
