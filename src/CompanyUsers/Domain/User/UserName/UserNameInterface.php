<?php

namespace App\CompanyUsers\Domain\User\UserName;

interface UserNameInterface
{
    /**
     * @return string
     */
    public function getUserName(): string;
}