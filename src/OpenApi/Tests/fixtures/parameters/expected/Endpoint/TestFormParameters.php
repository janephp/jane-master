<?php

namespace Jane\OpenApi\Tests\Expected\Endpoint;

class TestFormParameters extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    /**
     * 
     *
     * @param array $formParameters {
     *     @var string $testString 
     *     @var int $testInteger 
     *     @var float $testFloat 
     *     @var array $testArray 
     *     @var string $testRequired 
     *     @var string $testDefault 
     * }
     */
    function __construct(array $formParameters = array())
    {
        $this->formParameters = $formParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'POST';
    }
    function getUri() : string
    {
        return '/test-form';
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        return $this->getFormBody();
    }
    protected function getFormOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getFormOptionsResolver();
        $optionsResolver->setDefined(array('testString', 'testInteger', 'testFloat', 'testArray', 'testRequired', 'testDefault'));
        $optionsResolver->setRequired(array('testRequired'));
        $optionsResolver->setDefaults(array('testDefault' => 'test'));
        $optionsResolver->setAllowedTypes('testString', array('string'));
        $optionsResolver->setAllowedTypes('testInteger', array('int'));
        $optionsResolver->setAllowedTypes('testFloat', array('float'));
        $optionsResolver->setAllowedTypes('testArray', array('array'));
        $optionsResolver->setAllowedTypes('testRequired', array('string'));
        $optionsResolver->setAllowedTypes('testDefault', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return null;
        }
    }
}