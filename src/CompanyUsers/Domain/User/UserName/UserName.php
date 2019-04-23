<?php

namespace App\CompanyUsers\Domain\User\UserName;

use App\CompanyUsers\Domain\User\DomainUserException;

final class UserName
{
    /**
     * @var string
     */
    private $userName;

    /**
     * UserName constructor.
     * @param string $userName
     * @throws DomainUserException
     */
    public function __construct(string $userName)
    {
        if (empty(trim($userName))) {
            throw new DomainUserException('User username cannot be empty');
        }

        $this->userName = $userName;
    }
}