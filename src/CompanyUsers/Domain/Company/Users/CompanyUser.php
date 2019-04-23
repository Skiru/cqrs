<?php

namespace App\CompanyUsers\Domain\Company\Users;

use App\CompanyUsers\Domain\User\UserInterface;

class CompanyUser
{
    /**
     * @var Assert
     */
    private $assert;

    /**
     * CompanyUser constructor.
     * @param Assert $assert
     */
    public function __construct(Assert $assert)
    {
        $this->assert = $assert;
    }

    /**
     * @param UserInterface $user
     */
    public function createValid(UserInterface $user)
    {





    }
}