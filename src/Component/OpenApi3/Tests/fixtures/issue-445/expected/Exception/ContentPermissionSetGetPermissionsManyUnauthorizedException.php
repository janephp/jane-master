<?php

namespace PicturePark\API\Exception;

class ContentPermissionSetGetPermissionsManyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}