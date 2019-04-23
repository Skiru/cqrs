<?php

namespace App\CompanyUsers\UI\User\Controller;

use App\CompanyUsers\Domain\User\UserInterface;

interface UserControllerInterface
{
    /**
     * @return UserInterface
     */
    public function create(): UserInterface;

    /**
     * @param UserInterface $user
     * @return UserInterface
     */
    public function edit(UserInterface $user): UserInterface;
}