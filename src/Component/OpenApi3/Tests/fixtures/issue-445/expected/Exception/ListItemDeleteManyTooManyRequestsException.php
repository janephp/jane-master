<?php

namespace PicturePark\API\Exception;

class ListItemDeleteManyTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}