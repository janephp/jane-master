<?php

namespace CreditSafe\API\Exception;

class CompanySearchBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}