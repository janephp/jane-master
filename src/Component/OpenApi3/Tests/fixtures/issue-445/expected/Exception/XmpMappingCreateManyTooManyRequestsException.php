<?php

namespace PicturePark\API\Exception;

class XmpMappingCreateManyTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}