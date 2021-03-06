<?php

namespace PicturePark\API\Model;

class ArgumentRangeException
{
    /**
     * 
     *
     * @var string
     */
    protected $traceLevel;
    /**
     * 
     *
     * @var string|null
     */
    protected $traceId;
    /**
     * 
     *
     * @var string|null
     */
    protected $traceJobId;
    /**
     * 
     *
     * @var int
     */
    protected $httpStatusCode;
    /**
     * 
     *
     * @var string|null
     */
    protected $exceptionMessage;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerId;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerAlias;
    /**
     * 
     *
     * @var string|null
     */
    protected $userId;
    /**
     * 
     *
     * @var string|null
     */
    protected $argumentName;
    /**
     * 
     *
     * @var string|null
     */
    protected $argumentValue;
    /**
     * 
     *
     * @var string|null
     */
    protected $minAcceptableValue;
    /**
     * 
     *
     * @var string|null
     */
    protected $maxAcceptableValue;
    /**
     * 
     *
     * @return string
     */
    public function getTraceLevel() : string
    {
        return $this->traceLevel;
    }
    /**
     * 
     *
     * @param string $traceLevel
     *
     * @return self
     */
    public function setTraceLevel(string $traceLevel) : self
    {
        $this->traceLevel = $traceLevel;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTraceId() : ?string
    {
        return $this->traceId;
    }
    /**
     * 
     *
     * @param string|null $traceId
     *
     * @return self
     */
    public function setTraceId(?string $traceId) : self
    {
        $this->traceId = $traceId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTraceJobId() : ?string
    {
        return $this->traceJobId;
    }
    /**
     * 
     *
     * @param string|null $traceJobId
     *
     * @return self
     */
    public function setTraceJobId(?string $traceJobId) : self
    {
        $this->traceJobId = $traceJobId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHttpStatusCode() : int
    {
        return $this->httpStatusCode;
    }
    /**
     * 
     *
     * @param int $httpStatusCode
     *
     * @return self
     */
    public function setHttpStatusCode(int $httpStatusCode) : self
    {
        $this->httpStatusCode = $httpStatusCode;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getExceptionMessage() : ?string
    {
        return $this->exceptionMessage;
    }
    /**
     * 
     *
     * @param string|null $exceptionMessage
     *
     * @return self
     */
    public function setExceptionMessage(?string $exceptionMessage) : self
    {
        $this->exceptionMessage = $exceptionMessage;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerId() : ?string
    {
        return $this->customerId;
    }
    /**
     * 
     *
     * @param string|null $customerId
     *
     * @return self
     */
    public function setCustomerId(?string $customerId) : self
    {
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerAlias() : ?string
    {
        return $this->customerAlias;
    }
    /**
     * 
     *
     * @param string|null $customerAlias
     *
     * @return self
     */
    public function setCustomerAlias(?string $customerAlias) : self
    {
        $this->customerAlias = $customerAlias;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUserId() : ?string
    {
        return $this->userId;
    }
    /**
     * 
     *
     * @param string|null $userId
     *
     * @return self
     */
    public function setUserId(?string $userId) : self
    {
        $this->userId = $userId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getArgumentName() : ?string
    {
        return $this->argumentName;
    }
    /**
     * 
     *
     * @param string|null $argumentName
     *
     * @return self
     */
    public function setArgumentName(?string $argumentName) : self
    {
        $this->argumentName = $argumentName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getArgumentValue() : ?string
    {
        return $this->argumentValue;
    }
    /**
     * 
     *
     * @param string|null $argumentValue
     *
     * @return self
     */
    public function setArgumentValue(?string $argumentValue) : self
    {
        $this->argumentValue = $argumentValue;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMinAcceptableValue() : ?string
    {
        return $this->minAcceptableValue;
    }
    /**
     * 
     *
     * @param string|null $minAcceptableValue
     *
     * @return self
     */
    public function setMinAcceptableValue(?string $minAcceptableValue) : self
    {
        $this->minAcceptableValue = $minAcceptableValue;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMaxAcceptableValue() : ?string
    {
        return $this->maxAcceptableValue;
    }
    /**
     * 
     *
     * @param string|null $maxAcceptableValue
     *
     * @return self
     */
    public function setMaxAcceptableValue(?string $maxAcceptableValue) : self
    {
        $this->maxAcceptableValue = $maxAcceptableValue;
        return $this;
    }
}