<?php

namespace Github\Exception;

class TeamsCheckPermissionsForRepoInOrgNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Response if team does not have permission for the repository');
    }
}