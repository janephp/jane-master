<?php

namespace PicturePark\API\Exception;

class IdentityProviderGetAllBasicInfosUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}