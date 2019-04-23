<?php

namespace App\CompanyUsers\Application\User\Command;

use App\CompanyUsers\Domain\User\Email\EmailInterface;
use App\CompanyUsers\Domain\User\Phone\PhoneInterface;
use App\CompanyUsers\Domain\User\UserInterface;
use App\CompanyUsers\Domain\User\UserName\UserNameInterface;

class RegisterUser implements UserInterface
{
    /**
     * @var UserNameInterface
     */
    private $userName;

    /**
     * @var EmailInterface
     */
    private $email;

    /**
     * @var PhoneInterface
     */
    private $phone;

    /**
     * RegisterUserCommand constructor.
     * @param UserNameInterface $userName
     * @param EmailInterface $email
     * @param PhoneInterface $phone
     */
    public function __construct(UserNameInterface $userName, EmailInterface $email, PhoneInterface $phone)
    {
        $this->userName = $userName;
        $this->email = $email;
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email->getEmail();
    }

    /**
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phone->getPhoneNumber();
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName->getUserName();
    }
}