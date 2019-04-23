<?php

namespace App\CompanyUsers\Domain\User\Email;

interface EmailInterface
{
    /**
     * @return string
     */
    public function getEmail(): string;
}