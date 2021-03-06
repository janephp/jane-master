<?php

namespace ApiPlatform\Demo\Endpoint;

class PutReviewItem extends \ApiPlatform\Demo\Runtime\Client\BaseEndpoint implements \ApiPlatform\Demo\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * 
     *
     * @param string $id 
     * @param null|\stdClass|\ApiPlatform\Demo\Model\Review $requestBody 
     */
    public function __construct(string $id, $requestBody = null)
    {
        $this->id = $id;
        $this->body = $requestBody;
    }
    use \ApiPlatform\Demo\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/reviews/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \stdClass) {
            return array(array('Content-Type' => array('application/ld+json')), $this->body);
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Review) {
            return array(array('Content-Type' => array('application/hal+json')), $this->body);
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Review) {
            return array(array('Content-Type' => array('application/vnd.api+json')), $this->body);
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Review) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Review) {
            return array(array('Content-Type' => array('application/xml')), $this->body);
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Review) {
            return array(array('Content-Type' => array('text/xml')), $this->body);
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Review) {
            return array(array('Content-Type' => array('application/x-yaml')), $this->body);
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Review) {
            return array(array('Content-Type' => array('text/csv')), $this->body);
        }
        if ($this->body instanceof \ApiPlatform\Demo\Model\Review) {
            return array(array('Content-Type' => array('text/html')), $this->body);
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ApiPlatform\Demo\Exception\PutReviewItemBadRequestException
     * @throws \ApiPlatform\Demo\Exception\PutReviewItemNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \ApiPlatform\Demo\Exception\PutReviewItemBadRequestException();
        }
        if (404 === $status) {
            throw new \ApiPlatform\Demo\Exception\PutReviewItemNotFoundException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKey');
    }
}