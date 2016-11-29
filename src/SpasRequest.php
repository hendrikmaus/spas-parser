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
     * Response to this request
     *
     * @var SpasResponse
     */
    private $response;

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

    public function getBaseUrl()
    {
        return $this->baseUrl;
    }

    public function setBaseUrl($url)
    {
        $this->baseUrl = $url;

        return $this;
    }

    public function getHref()
    {
        return $this->href;
    }

    public function setHref($href)
    {
        $this->href = $href;

        return $this;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    public function isEnabled()
    {
        return $this->enabled;
    }

    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function getResponse()
    {
        return $this->response;
    }

    public function setResponse(ParsedResponse $response)
    {
        $this->response = $response;

        return $this;
    }

    public function getParams()
    {
        return $this->params;
    }

    public function setParams(ParameterBag $params)
    {
        $this->params = $params;

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

    public function appendToName($append, $separator = ' > ')
    {
        $name = $this->getName();

        if (!$name) {
            $this->setName($append);
        } else {
            $this->setName($name . $separator . $append);
        }

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getResourceGroup()
    {
        return $this->resourceGroup;
    }

    public function setResourceGroup(ApiResourceGroup $resourceGroup)
    {
        $this->resourceGroup = $resourceGroup;

        return $this;
    }

    public function getProcessorOptions()
    {
        return $this->processorOptions;
    }

    public function setProcessorOptions(ParameterBag $processorOptions)
    {
        $this->processorOptions = $processorOptions;

        return $this;
    }
}
