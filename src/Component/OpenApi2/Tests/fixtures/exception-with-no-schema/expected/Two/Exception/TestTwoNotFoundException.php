<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Two\Exception;

class TestTwoNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Not found');
    }
}