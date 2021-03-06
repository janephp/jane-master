<?php

namespace Github\Exception;

class TeamsAddOrUpdateMembershipForUserLegacyForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('Response if team synchronization is set up');
    }
}