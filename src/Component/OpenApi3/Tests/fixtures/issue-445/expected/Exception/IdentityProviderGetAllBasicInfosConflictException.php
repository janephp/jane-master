<?php

namespace PicturePark\API\Exception;

class IdentityProviderGetAllBasicInfosConflictException extends ConflictException
{
    private $pictureparkConflictException;
    public function __construct(\PicturePark\API\Model\PictureparkConflictException $pictureparkConflictException)
    {
        parent::__construct('Version conflict', 409);
        $this->pictureparkConflictException = $pictureparkConflictException;
    }
    public function getPictureparkConflictException()
    {
        return $this->pictureparkConflictException;
    }
}