<?php

namespace App\CompanyUsers\Domain\User\Phone;

interface PhoneInterface
{
    /**
     * @return string|null
     */
    public function getPhoneNumber(): ?string;
}