<?php

namespace PicturePark\API\Exception;

class ContentCreateManyMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}