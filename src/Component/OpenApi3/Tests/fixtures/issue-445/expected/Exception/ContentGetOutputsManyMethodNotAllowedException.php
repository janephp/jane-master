<?php

namespace PicturePark\API\Exception;

class ContentGetOutputsManyMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}