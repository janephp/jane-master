<?php

namespace PicturePark\API\Exception;

class TransferDeleteMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}