<?php

namespace PicturePark\API\Exception;

class TransferSearchFilesUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}