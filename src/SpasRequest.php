<?php

namespace Hmaus\Spas\Parser;

use Hmaus\Reynaldo\Elements\ApiResourceGroup;
use Symfony\Component\HttpFoundation\HeaderBag;
use Symfony\Component\HttpFoundation\ParameterBag;

class SpasRequest implements ParsedRequest
{
    /**
     * @var ParameterBag
     */
    public $params;

    /**
     * @var HeaderBag
     */
    public $headers;

    /**
     * Name of the request, for hook purposes
     *
     * @var string
     */
    private $name = '';

    /**
     * Request resource group
     *
     * @var ApiResourceGroup
     */
    private $resourceGroup;

    /**
     * Base URL including scheme and port without trailing slash
     * e.g. http://localhost:80
     *
     * @var string
     */
    private $baseUrl = '';

    /**
     * @var string
     */
    private $href = '';

    /**
     * Request body
     *
     * @var string
     */
    private $content = '';

    /**
     * HTTP Request method
     *
     * @var string
     */
    private $method = '';

    /**
     * flag whether or not to test this request
     *
     * @var bool
     */
    private $enabled = false;

    /**
     * Expected response to this request
     *
     * @var ParsedResponse
     */
    private $expectedResponse;

    /**
     * Actual response to this request
     *
     * @var ParsedResponse
     */
    private $actualResponse;

    /**
     * Generic param bag to store options for spas itself and its hooks
     *
     * @var ParameterBag
     */
    private $processorOptions;

    public function __construct()
    {
        $this->params           = new ParameterBag();
        $this->headers          = new HeaderBag();
        $this->processorOptions = new ParameterBag();
    }

    public function getBaseUrl() : string
    {
        return $this->baseUrl;
    }

    public function setBaseUrl(string $url) : ParsedRequest
    {
        $this->baseUrl = $url;

        return $this;
    }

    public function getHref() : string
    {
        return $this->href;
    }

    public function setHref(string $href) : ParsedRequest
    {
        $this->href = $href;

        return $this;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content) : ParsedRequest
    {
        $this->content = $content;

        return $this;
    }

    public function getMethod() : string
    {
        return $this->method;
    }

    public function setMethod(string $method) : ParsedRequest
    {
        $this->method = $method;

        return $this;
    }

    public function isEnabled() : bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled) : ParsedRequest
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function getExpectedResponse() : ParsedResponse
    {
        return $this->expectedResponse;
    }

    public function setExpectedResponse(ParsedResponse $expectedResponse) : ParsedRequest
    {
        $this->expectedResponse = $expectedResponse;

        return $this;
    }

    public function getParams() : ParameterBag
    {
        return $this->params;
    }

    public function setParams(ParameterBag $params) : ParsedRequest
    {
        $this->params = $params;

        return $this;
    }

    public function getHeaders() : HeaderBag
    {
        return $this->headers;
    }

    public function setHeaders(HeaderBag $headers) : ParsedRequest
    {
        $this->headers = $headers;

        return $this;
    }

    public function appendToName(string $append, string $separator = ' > ') : ParsedRequest
    {
        $name = $this->getName();

        if (!$name) {
            $this->setName($append);
        } else {
            $this->setName($name . $separator . $append);
        }

        return $this;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function setName(string $name) : ParsedRequest
    {
        $this->name = $name;

        return $this;
    }

    public function getResourceGroup() : ApiResourceGroup
    {
        return $this->resourceGroup;
    }

    public function setResourceGroup(ApiResourceGroup $resourceGroup) : ParsedRequest
    {
        $this->resourceGroup = $resourceGroup;

        return $this;
    }

    public function getProcessorOptions() : ParameterBag
    {
        return $this->processorOptions;
    }

    public function setProcessorOptions(ParameterBag $processorOptions) : ParsedRequest
    {
        $this->processorOptions = $processorOptions;

        return $this;
    }

    public function getActualResponse()
    {
        return $this->actualResponse;
    }

    public function setActualResponse(ParsedResponse $actualResponse) : ParsedRequest
    {
        $this->actualResponse = $actualResponse;

        return $this;
    }
}
